<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\core\Type\FileType;
use Mukadi\Chart\Builder;
use Mukadi\Chart\Utils\RandomColorFactory;
use Mukadi\Chart\Chart;


use PDO;
class ProduitController extends AbstractController
{
    /**
     * @Route("/admin/dashboard/admin_pr", name="admin_pr")
     */
    public function admin_pr(ProduitRepository $repository): Response
    {
        $data = $repository->findAll();
        return $this->render('backoffice/dashboardPr.html.twig', [
            'data' => $data,
        ]);
    }
    /**
     * @Route("/produit", name="produit")
     */
    public function AddPr(\Symfony\Component\HttpFoundation\Request $request1): Response
        {
            $pr = new Produit();
            $form = $this->createForm(ProduitType::class, $pr);
            $form->handleRequest($request1);
            if ($form->isSubmitted() && $form->isValid()) {
                $file= $pr->getImage();
                $fileName= md5(uniqid()).'.'.$file->guessExtension();
                try{
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                }catch (FileException $e){
                    // ...handle exeption if something happens during
                }
                $em = $this->getDoctrine()->getManager();
                $pr->setImage($fileName);
                $em->persist($pr);
                $em->flush();
                return $this->redirectToRoute('produit');
            }
            return $this->render('produit/index.html.twig', [
                'f' => $form->createView(),
            ]);
        }
    /**
     * @Route("/suppP/{id}", name="suppP")
     */
    public function suppP($id): Response
    {
        $pr = $this->getDoctrine()->getRepository(Produit::class)->find($id);
        $en = $this->getDoctrine()->getManager();
        $en->remove($pr);
        $en->flush();
        return $this->redirectToRoute('admin_pr');
    }
    /**
     * @Route("/modifP/{id}", name="modifP")
     */
    public function modifP(\Symfony\Component\HttpFoundation\Request $request, $id): Response
    {
        $pr = $this->getDoctrine()->getRepository(Produit::class)->find($id);
        $form = $this->createForm(ProduitType::class, $pr);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('produit');
        }
        return $this->render('produit/index.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    

    /**
     * @Route("/statics", name="produit_stat", methods={"GET"})
     */
    public function stat()
    {
        $connection = new PDO('mysql:dbname=culture-website-db;host=127.0.0.1','root','');
        $builder = new Builder($connection);

        $builder
//
            ->query("SELECT COUNT(*) total, designation FROM produit GROUP BY designation")
            ->addDataset('total','Total',[
                "backgroundColor" => RandomColorFactory::getRandomRGBAColors(24)
            ])
            ->labels('designation');

        $chart = $builder->buildChart('chart',Chart::PIE);
        dump($chart);
        return $this->render('produit/chart.html.twig',[
            "chart" => $chart
        ]);
    }

 
 /**
     * @Route("/searchProduit", name="produit_search")
     */
    public function searchProduit(Request $request)
    {
        $data=   $request->get('produit');
        $em=$this->getDoctrine()->getManager();
        if($data == ""){
            $data=$em->getRepository(Produit::class)->findAll();
        }else{
            $data=$em->getRepository(Produit::class)->findBy(
                ['designation'=> $data]
            );
        }

        return $this->render('backoffice/dashboardPr.html.twig', array(
            'data' => $data
        ));

    }
       

  



}

