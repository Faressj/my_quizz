<?php

namespace ContainerUmQzxkV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8739c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5f011 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb35bf = [
        
    ];

    public function getConnection()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getConnection', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getMetadataFactory', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getExpressionBuilder', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'beginTransaction', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getCache', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'transactional', array('func' => $func), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'commit', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->commit();
    }

    public function rollback()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'rollback', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getClassMetadata', array('className' => $className), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'createQuery', array('dql' => $dql), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'createNamedQuery', array('name' => $name), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'createQueryBuilder', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'flush', array('entity' => $entity), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'clear', array('entityName' => $entityName), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->clear($entityName);
    }

    public function close()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'close', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->close();
    }

    public function persist($entity)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'persist', array('entity' => $entity), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'remove', array('entity' => $entity), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'refresh', array('entity' => $entity), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'detach', array('entity' => $entity), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'merge', array('entity' => $entity), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'contains', array('entity' => $entity), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getEventManager', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getConfiguration', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'isOpen', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getUnitOfWork', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getProxyFactory', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'initializeObject', array('obj' => $obj), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'getFilters', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'isFiltersStateClean', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'hasFilters', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return $this->valueHolder8739c->hasFilters();
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

        $instance->initializer5f011 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8739c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8739c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8739c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, '__get', ['name' => $name], $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        if (isset(self::$publicPropertiesb35bf[$name])) {
            return $this->valueHolder8739c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8739c;

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

        $targetObject = $this->valueHolder8739c;
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
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8739c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8739c;
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
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, '__isset', array('name' => $name), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8739c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8739c;
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
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, '__unset', array('name' => $name), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8739c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8739c;
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
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, '__clone', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        $this->valueHolder8739c = clone $this->valueHolder8739c;
    }

    public function __sleep()
    {
        $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, '__sleep', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;

        return array('valueHolder8739c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5f011 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5f011;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5f011 && ($this->initializer5f011->__invoke($valueHolder8739c, $this, 'initializeProxy', array(), $this->initializer5f011) || 1) && $this->valueHolder8739c = $valueHolder8739c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8739c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8739c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
