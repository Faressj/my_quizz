<?php

namespace ContainerUoe9cWR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera2a4b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb7060 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesed6c8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getConnection', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getMetadataFactory', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getExpressionBuilder', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'beginTransaction', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getCache', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'transactional', array('func' => $func), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'commit', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->commit();
    }

    public function rollback()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'rollback', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getClassMetadata', array('className' => $className), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'createQuery', array('dql' => $dql), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'createNamedQuery', array('name' => $name), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'createQueryBuilder', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'flush', array('entity' => $entity), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'clear', array('entityName' => $entityName), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->clear($entityName);
    }

    public function close()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'close', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->close();
    }

    public function persist($entity)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'persist', array('entity' => $entity), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'remove', array('entity' => $entity), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'refresh', array('entity' => $entity), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'detach', array('entity' => $entity), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'merge', array('entity' => $entity), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'contains', array('entity' => $entity), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getEventManager', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getConfiguration', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'isOpen', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getUnitOfWork', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getProxyFactory', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'initializeObject', array('obj' => $obj), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'getFilters', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'isFiltersStateClean', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'hasFilters', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return $this->valueHoldera2a4b->hasFilters();
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

        $instance->initializerb7060 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera2a4b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2a4b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera2a4b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, '__get', ['name' => $name], $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        if (isset(self::$publicPropertiesed6c8[$name])) {
            return $this->valueHoldera2a4b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2a4b;

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

        $targetObject = $this->valueHoldera2a4b;
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
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2a4b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2a4b;
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
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, '__isset', array('name' => $name), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2a4b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera2a4b;
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
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, '__unset', array('name' => $name), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2a4b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera2a4b;
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
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, '__clone', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        $this->valueHoldera2a4b = clone $this->valueHoldera2a4b;
    }

    public function __sleep()
    {
        $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, '__sleep', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;

        return array('valueHoldera2a4b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb7060 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb7060;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb7060 && ($this->initializerb7060->__invoke($valueHoldera2a4b, $this, 'initializeProxy', array(), $this->initializerb7060) || 1) && $this->valueHoldera2a4b = $valueHoldera2a4b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2a4b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2a4b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
