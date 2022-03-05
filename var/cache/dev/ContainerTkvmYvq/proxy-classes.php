<?php

namespace ContainerTkvmYvq;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1bb03 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercc439 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf88e5 = [
        
    ];

    public function getConnection()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getConnection', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getMetadataFactory', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getExpressionBuilder', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'beginTransaction', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getCache', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getCache();
    }

    public function transactional($func)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'transactional', array('func' => $func), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'wrapInTransaction', array('func' => $func), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'commit', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->commit();
    }

    public function rollback()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'rollback', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getClassMetadata', array('className' => $className), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'createQuery', array('dql' => $dql), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'createNamedQuery', array('name' => $name), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'createQueryBuilder', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'flush', array('entity' => $entity), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'clear', array('entityName' => $entityName), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->clear($entityName);
    }

    public function close()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'close', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->close();
    }

    public function persist($entity)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'persist', array('entity' => $entity), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'remove', array('entity' => $entity), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'refresh', array('entity' => $entity), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'detach', array('entity' => $entity), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'merge', array('entity' => $entity), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getRepository', array('entityName' => $entityName), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'contains', array('entity' => $entity), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getEventManager', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getConfiguration', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'isOpen', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getUnitOfWork', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getProxyFactory', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'initializeObject', array('obj' => $obj), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'getFilters', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'isFiltersStateClean', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'hasFilters', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return $this->valueHolder1bb03->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializercc439 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1bb03) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1bb03 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1bb03->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, '__get', ['name' => $name], $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        if (isset(self::$publicPropertiesf88e5[$name])) {
            return $this->valueHolder1bb03->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bb03;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1bb03;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bb03;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1bb03;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, '__isset', array('name' => $name), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bb03;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1bb03;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, '__unset', array('name' => $name), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bb03;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1bb03;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, '__clone', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        $this->valueHolder1bb03 = clone $this->valueHolder1bb03;
    }

    public function __sleep()
    {
        $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, '__sleep', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;

        return array('valueHolder1bb03');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercc439 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercc439;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercc439 && ($this->initializercc439->__invoke($valueHolder1bb03, $this, 'initializeProxy', array(), $this->initializercc439) || 1) && $this->valueHolder1bb03 = $valueHolder1bb03;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1bb03;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1bb03;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
