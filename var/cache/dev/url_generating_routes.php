<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    'admin_prd' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::admin_prd'], [], [['text', '/admin/dashboard']], [], [], []],
    'blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'admin_cat' => [[], ['_controller' => 'App\\Controller\\CategorieController::admin_cat'], [], [['text', '/admin/dashboard/admin_cat']], [], [], []],
    'categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::AddCa'], [], [['text', '/categorie']], [], [], []],
    'suppC' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::suppC'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/suppC']], [], [], []],
    'modifC' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::modifC'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifC']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'admin_pr' => [[], ['_controller' => 'App\\Controller\\ProduitController::admin_pr'], [], [['text', '/admin/dashboard/admin_pr']], [], [], []],
    'produit' => [[], ['_controller' => 'App\\Controller\\ProduitController::AddPr'], [], [['text', '/produit']], [], [], []],
    'suppP' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::suppP'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/suppP']], [], [], []],
    'modifP' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::modifP'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifP']], [], [], []],
];