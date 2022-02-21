<?php

namespace ContainerN6bCz8H;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder6c7e6 = null;
    private $initializer1d675 = null;
    private static $publicPropertiesad152 = [
        
    ];
    public function getConnection()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getConnection', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getMetadataFactory', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getExpressionBuilder', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'beginTransaction', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getCache', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getCache();
    }
    public function transactional($func)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'transactional', array('func' => $func), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'commit', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->commit();
    }
    public function rollback()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'rollback', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getClassMetadata', array('className' => $className), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'createQuery', array('dql' => $dql), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'createNamedQuery', array('name' => $name), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'createQueryBuilder', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'flush', array('entity' => $entity), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'clear', array('entityName' => $entityName), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->clear($entityName);
    }
    public function close()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'close', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->close();
    }
    public function persist($entity)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'persist', array('entity' => $entity), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'remove', array('entity' => $entity), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'refresh', array('entity' => $entity), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'detach', array('entity' => $entity), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'merge', array('entity' => $entity), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'contains', array('entity' => $entity), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getEventManager', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getConfiguration', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'isOpen', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getUnitOfWork', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getProxyFactory', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'initializeObject', array('obj' => $obj), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'getFilters', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'isFiltersStateClean', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'hasFilters', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return $this->valueHolder6c7e6->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer1d675 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder6c7e6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6c7e6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder6c7e6->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, '__get', ['name' => $name], $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        if (isset(self::$publicPropertiesad152[$name])) {
            return $this->valueHolder6c7e6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c7e6;
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
        $targetObject = $this->valueHolder6c7e6;
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
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c7e6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder6c7e6;
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
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, '__isset', array('name' => $name), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c7e6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder6c7e6;
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
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, '__unset', array('name' => $name), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c7e6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder6c7e6;
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
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, '__clone', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        $this->valueHolder6c7e6 = clone $this->valueHolder6c7e6;
    }
    public function __sleep()
    {
        $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, '__sleep', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
        return array('valueHolder6c7e6');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1d675 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1d675;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer1d675 && ($this->initializer1d675->__invoke($valueHolder6c7e6, $this, 'initializeProxy', array(), $this->initializer1d675) || 1) && $this->valueHolder6c7e6 = $valueHolder6c7e6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6c7e6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6c7e6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
