<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderb8d43 = null;
    private $initializer17331 = null;
    private static $publicProperties84483 = [
        
    ];
    public function getConnection()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getConnection', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getMetadataFactory', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getExpressionBuilder', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'beginTransaction', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getCache', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getCache();
    }
    public function transactional($func)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'transactional', array('func' => $func), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'wrapInTransaction', array('func' => $func), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'commit', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->commit();
    }
    public function rollback()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'rollback', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getClassMetadata', array('className' => $className), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'createQuery', array('dql' => $dql), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'createNamedQuery', array('name' => $name), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'createQueryBuilder', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'flush', array('entity' => $entity), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'clear', array('entityName' => $entityName), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->clear($entityName);
    }
    public function close()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'close', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->close();
    }
    public function persist($entity)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'persist', array('entity' => $entity), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'remove', array('entity' => $entity), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'refresh', array('entity' => $entity), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'detach', array('entity' => $entity), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'merge', array('entity' => $entity), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getRepository', array('entityName' => $entityName), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'contains', array('entity' => $entity), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getEventManager', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getConfiguration', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'isOpen', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getUnitOfWork', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getProxyFactory', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'initializeObject', array('obj' => $obj), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'getFilters', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'isFiltersStateClean', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'hasFilters', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return $this->valueHolderb8d43->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer17331 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderb8d43) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb8d43 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderb8d43->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, '__get', ['name' => $name], $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        if (isset(self::$publicProperties84483[$name])) {
            return $this->valueHolderb8d43->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8d43;
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
        $targetObject = $this->valueHolderb8d43;
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
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8d43;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb8d43;
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
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, '__isset', array('name' => $name), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8d43;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderb8d43;
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
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, '__unset', array('name' => $name), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8d43;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderb8d43;
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
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, '__clone', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        $this->valueHolderb8d43 = clone $this->valueHolderb8d43;
    }
    public function __sleep()
    {
        $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, '__sleep', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
        return array('valueHolderb8d43');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer17331 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer17331;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer17331 && ($this->initializer17331->__invoke($valueHolderb8d43, $this, 'initializeProxy', array(), $this->initializer17331) || 1) && $this->valueHolderb8d43 = $valueHolderb8d43;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb8d43;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb8d43;
    }
}
