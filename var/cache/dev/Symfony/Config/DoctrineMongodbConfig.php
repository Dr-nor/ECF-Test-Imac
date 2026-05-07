<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMongodb'.\DIRECTORY_SEPARATOR.'DocumentManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMongodb'.\DIRECTORY_SEPARATOR.'ConnectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMongodb'.\DIRECTORY_SEPARATOR.'TypeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMongodb'.\DIRECTORY_SEPARATOR.'DefaultCommitOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMongodb'.\DIRECTORY_SEPARATOR.'ControllerResolverConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class DoctrineMongodbConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $documentManagers;
    private $connections;
    private $resolveTargetDocuments;
    private $types;
    private $proxyNamespace;
    private $proxyDir;
    private $enableNativeLazyObjects;
    private $enableLazyGhostObjects;
    private $autoGenerateProxyClasses;
    private $hydratorNamespace;
    private $hydratorDir;
    private $autoGenerateHydratorClasses;
    private $persistentCollectionNamespace;
    private $persistentCollectionDir;
    private $autoGeneratePersistentCollectionClasses;
    private $defaultDocumentManager;
    private $defaultConnection;
    private $defaultDatabase;
    private $defaultCommitOptions;
    private $controllerResolver;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @deprecated since Symfony 7.4
     */
    public function documentManager(string $id, array $value = []): \Symfony\Config\DoctrineMongodb\DocumentManagerConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (!isset($this->documentManagers[$id])) {
            $this->_usedProperties['documentManagers'] = true;
            $this->documentManagers[$id] = new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "documentManager()" has already been initialized. You cannot pass values the second time you call documentManager().');
        }

        return $this->documentManagers[$id];
    }

    /**
     * @deprecated since Symfony 7.4
     */
    public function connection(string $id, array $value = []): \Symfony\Config\DoctrineMongodb\ConnectionConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (!isset($this->connections[$id])) {
            $this->_usedProperties['connections'] = true;
            $this->connections[$id] = new \Symfony\Config\DoctrineMongodb\ConnectionConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "connection()" has already been initialized. You cannot pass values the second time you call connection().');
        }

        return $this->connections[$id];
    }

    /**
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function resolveTargetDocument(string $interface, mixed $value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['resolveTargetDocuments'] = true;
        $this->resolveTargetDocuments[$interface] = $value;

        return $this;
    }

    /**
     * @template TValue of string|array
     * @param TValue $value
     * @return \Symfony\Config\DoctrineMongodb\TypeConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\DoctrineMongodb\TypeConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function type(string $name, string|array $value = []): \Symfony\Config\DoctrineMongodb\TypeConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['types'] = true;
            $this->types[$name] = $value;

            return $this;
        }

        if (!isset($this->types[$name]) || !$this->types[$name] instanceof \Symfony\Config\DoctrineMongodb\TypeConfig) {
            $this->_usedProperties['types'] = true;
            $this->types[$name] = new \Symfony\Config\DoctrineMongodb\TypeConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "type()" has already been initialized. You cannot pass values the second time you call type().');
        }

        return $this->types[$name];
    }

    /**
     * @default 'MongoDBODMProxies'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function proxyNamespace($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['proxyNamespace'] = true;
        $this->proxyNamespace = $value;

        return $this;
    }

    /**
     * @default '%kernel.cache_dir%/doctrine/odm/mongodb/Proxies'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function proxyDir($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['proxyDir'] = true;
        $this->proxyDir = $value;

        return $this;
    }

    /**
     * Requires PHP 8.4+ and doctrine/mongodb-odm 2.14+
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated Since doctrine/mongodb-odm-bundle 5.4: The "enable_native_lazy_objects" option is deprecated and will be removed in 6.0. Native Lazy Objects are enable by default when using PHP 8.4+ and doctrine/mongodb-odm 2.14+.
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function enableNativeLazyObjects($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['enableNativeLazyObjects'] = true;
        $this->enableNativeLazyObjects = $value;

        return $this;
    }

    /**
     * Requires doctrine/mongodb-odm 2.10+
     * @default true
     * @param ParamConfigurator|bool $value
     * @deprecated Since doctrine/mongodb-odm-bundle 5.4: The "enable_lazy_ghost_objects" option is deprecated and will be removed in 6.0. Symfony Lazy Ghost Objects are enabled by default with doctrine/mongodb-odm 2.10+.
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function enableLazyGhostObjects($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['enableLazyGhostObjects'] = true;
        $this->enableLazyGhostObjects = $value;

        return $this;
    }

    /**
     * @default 3
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function autoGenerateProxyClasses($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['autoGenerateProxyClasses'] = true;
        $this->autoGenerateProxyClasses = $value;

        return $this;
    }

    /**
     * @default 'Hydrators'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function hydratorNamespace($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['hydratorNamespace'] = true;
        $this->hydratorNamespace = $value;

        return $this;
    }

    /**
     * @default '%kernel.cache_dir%/doctrine/odm/mongodb/Hydrators'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function hydratorDir($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['hydratorDir'] = true;
        $this->hydratorDir = $value;

        return $this;
    }

    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function autoGenerateHydratorClasses($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['autoGenerateHydratorClasses'] = true;
        $this->autoGenerateHydratorClasses = $value;

        return $this;
    }

    /**
     * @default 'PersistentCollections'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function persistentCollectionNamespace($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['persistentCollectionNamespace'] = true;
        $this->persistentCollectionNamespace = $value;

        return $this;
    }

    /**
     * @default '%kernel.cache_dir%/doctrine/odm/mongodb/PersistentCollections'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function persistentCollectionDir($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['persistentCollectionDir'] = true;
        $this->persistentCollectionDir = $value;

        return $this;
    }

    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function autoGeneratePersistentCollectionClasses($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['autoGeneratePersistentCollectionClasses'] = true;
        $this->autoGeneratePersistentCollectionClasses = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function defaultDocumentManager($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['defaultDocumentManager'] = true;
        $this->defaultDocumentManager = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function defaultConnection($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['defaultConnection'] = true;
        $this->defaultConnection = $value;

        return $this;
    }

    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function defaultDatabase($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['defaultDatabase'] = true;
        $this->defaultDatabase = $value;

        return $this;
    }

    /**
     * @deprecated since Symfony 7.4
     */
    public function defaultCommitOptions(array $value = []): \Symfony\Config\DoctrineMongodb\DefaultCommitOptionsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->defaultCommitOptions) {
            $this->_usedProperties['defaultCommitOptions'] = true;
            $this->defaultCommitOptions = new \Symfony\Config\DoctrineMongodb\DefaultCommitOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "defaultCommitOptions()" has already been initialized. You cannot pass values the second time you call defaultCommitOptions().');
        }

        return $this->defaultCommitOptions;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":true,"auto_mapping":true}
     * @return \Symfony\Config\DoctrineMongodb\ControllerResolverConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\DoctrineMongodb\ControllerResolverConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function controllerResolver(array|bool $value = []): \Symfony\Config\DoctrineMongodb\ControllerResolverConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['controllerResolver'] = true;
            $this->controllerResolver = $value;

            return $this;
        }

        if (!$this->controllerResolver instanceof \Symfony\Config\DoctrineMongodb\ControllerResolverConfig) {
            $this->_usedProperties['controllerResolver'] = true;
            $this->controllerResolver = new \Symfony\Config\DoctrineMongodb\ControllerResolverConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "controllerResolver()" has already been initialized. You cannot pass values the second time you call controllerResolver().');
        }

        return $this->controllerResolver;
    }

    public function getExtensionAlias(): string
    {
        return 'doctrine_mongodb';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('document_managers', $config)) {
            $this->_usedProperties['documentManagers'] = true;
            $this->documentManagers = array_map(fn ($v) => new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig($v), $config['document_managers']);
            unset($config['document_managers']);
        }

        if (array_key_exists('connections', $config)) {
            $this->_usedProperties['connections'] = true;
            $this->connections = array_map(fn ($v) => new \Symfony\Config\DoctrineMongodb\ConnectionConfig($v), $config['connections']);
            unset($config['connections']);
        }

        if (array_key_exists('resolve_target_documents', $config)) {
            $this->_usedProperties['resolveTargetDocuments'] = true;
            $this->resolveTargetDocuments = $config['resolve_target_documents'];
            unset($config['resolve_target_documents']);
        }

        if (array_key_exists('types', $config)) {
            $this->_usedProperties['types'] = true;
            $this->types = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\DoctrineMongodb\TypeConfig($v) : $v, $config['types']);
            unset($config['types']);
        }

        if (array_key_exists('proxy_namespace', $config)) {
            $this->_usedProperties['proxyNamespace'] = true;
            $this->proxyNamespace = $config['proxy_namespace'];
            unset($config['proxy_namespace']);
        }

        if (array_key_exists('proxy_dir', $config)) {
            $this->_usedProperties['proxyDir'] = true;
            $this->proxyDir = $config['proxy_dir'];
            unset($config['proxy_dir']);
        }

        if (array_key_exists('enable_native_lazy_objects', $config)) {
            $this->_usedProperties['enableNativeLazyObjects'] = true;
            $this->enableNativeLazyObjects = $config['enable_native_lazy_objects'];
            unset($config['enable_native_lazy_objects']);
        }

        if (array_key_exists('enable_lazy_ghost_objects', $config)) {
            $this->_usedProperties['enableLazyGhostObjects'] = true;
            $this->enableLazyGhostObjects = $config['enable_lazy_ghost_objects'];
            unset($config['enable_lazy_ghost_objects']);
        }

        if (array_key_exists('auto_generate_proxy_classes', $config)) {
            $this->_usedProperties['autoGenerateProxyClasses'] = true;
            $this->autoGenerateProxyClasses = $config['auto_generate_proxy_classes'];
            unset($config['auto_generate_proxy_classes']);
        }

        if (array_key_exists('hydrator_namespace', $config)) {
            $this->_usedProperties['hydratorNamespace'] = true;
            $this->hydratorNamespace = $config['hydrator_namespace'];
            unset($config['hydrator_namespace']);
        }

        if (array_key_exists('hydrator_dir', $config)) {
            $this->_usedProperties['hydratorDir'] = true;
            $this->hydratorDir = $config['hydrator_dir'];
            unset($config['hydrator_dir']);
        }

        if (array_key_exists('auto_generate_hydrator_classes', $config)) {
            $this->_usedProperties['autoGenerateHydratorClasses'] = true;
            $this->autoGenerateHydratorClasses = $config['auto_generate_hydrator_classes'];
            unset($config['auto_generate_hydrator_classes']);
        }

        if (array_key_exists('persistent_collection_namespace', $config)) {
            $this->_usedProperties['persistentCollectionNamespace'] = true;
            $this->persistentCollectionNamespace = $config['persistent_collection_namespace'];
            unset($config['persistent_collection_namespace']);
        }

        if (array_key_exists('persistent_collection_dir', $config)) {
            $this->_usedProperties['persistentCollectionDir'] = true;
            $this->persistentCollectionDir = $config['persistent_collection_dir'];
            unset($config['persistent_collection_dir']);
        }

        if (array_key_exists('auto_generate_persistent_collection_classes', $config)) {
            $this->_usedProperties['autoGeneratePersistentCollectionClasses'] = true;
            $this->autoGeneratePersistentCollectionClasses = $config['auto_generate_persistent_collection_classes'];
            unset($config['auto_generate_persistent_collection_classes']);
        }

        if (array_key_exists('default_document_manager', $config)) {
            $this->_usedProperties['defaultDocumentManager'] = true;
            $this->defaultDocumentManager = $config['default_document_manager'];
            unset($config['default_document_manager']);
        }

        if (array_key_exists('default_connection', $config)) {
            $this->_usedProperties['defaultConnection'] = true;
            $this->defaultConnection = $config['default_connection'];
            unset($config['default_connection']);
        }

        if (array_key_exists('default_database', $config)) {
            $this->_usedProperties['defaultDatabase'] = true;
            $this->defaultDatabase = $config['default_database'];
            unset($config['default_database']);
        }

        if (array_key_exists('default_commit_options', $config)) {
            $this->_usedProperties['defaultCommitOptions'] = true;
            $this->defaultCommitOptions = new \Symfony\Config\DoctrineMongodb\DefaultCommitOptionsConfig($config['default_commit_options']);
            unset($config['default_commit_options']);
        }

        if (array_key_exists('controller_resolver', $config)) {
            $this->_usedProperties['controllerResolver'] = true;
            $this->controllerResolver = \is_array($config['controller_resolver']) ? new \Symfony\Config\DoctrineMongodb\ControllerResolverConfig($config['controller_resolver']) : $config['controller_resolver'];
            unset($config['controller_resolver']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['documentManagers'])) {
            $output['document_managers'] = array_map(fn ($v) => $v->toArray(), $this->documentManagers);
        }
        if (isset($this->_usedProperties['connections'])) {
            $output['connections'] = array_map(fn ($v) => $v->toArray(), $this->connections);
        }
        if (isset($this->_usedProperties['resolveTargetDocuments'])) {
            $output['resolve_target_documents'] = $this->resolveTargetDocuments;
        }
        if (isset($this->_usedProperties['types'])) {
            $output['types'] = array_map(fn ($v) => $v instanceof \Symfony\Config\DoctrineMongodb\TypeConfig ? $v->toArray() : $v, $this->types);
        }
        if (isset($this->_usedProperties['proxyNamespace'])) {
            $output['proxy_namespace'] = $this->proxyNamespace;
        }
        if (isset($this->_usedProperties['proxyDir'])) {
            $output['proxy_dir'] = $this->proxyDir;
        }
        if (isset($this->_usedProperties['enableNativeLazyObjects'])) {
            $output['enable_native_lazy_objects'] = $this->enableNativeLazyObjects;
        }
        if (isset($this->_usedProperties['enableLazyGhostObjects'])) {
            $output['enable_lazy_ghost_objects'] = $this->enableLazyGhostObjects;
        }
        if (isset($this->_usedProperties['autoGenerateProxyClasses'])) {
            $output['auto_generate_proxy_classes'] = $this->autoGenerateProxyClasses;
        }
        if (isset($this->_usedProperties['hydratorNamespace'])) {
            $output['hydrator_namespace'] = $this->hydratorNamespace;
        }
        if (isset($this->_usedProperties['hydratorDir'])) {
            $output['hydrator_dir'] = $this->hydratorDir;
        }
        if (isset($this->_usedProperties['autoGenerateHydratorClasses'])) {
            $output['auto_generate_hydrator_classes'] = $this->autoGenerateHydratorClasses;
        }
        if (isset($this->_usedProperties['persistentCollectionNamespace'])) {
            $output['persistent_collection_namespace'] = $this->persistentCollectionNamespace;
        }
        if (isset($this->_usedProperties['persistentCollectionDir'])) {
            $output['persistent_collection_dir'] = $this->persistentCollectionDir;
        }
        if (isset($this->_usedProperties['autoGeneratePersistentCollectionClasses'])) {
            $output['auto_generate_persistent_collection_classes'] = $this->autoGeneratePersistentCollectionClasses;
        }
        if (isset($this->_usedProperties['defaultDocumentManager'])) {
            $output['default_document_manager'] = $this->defaultDocumentManager;
        }
        if (isset($this->_usedProperties['defaultConnection'])) {
            $output['default_connection'] = $this->defaultConnection;
        }
        if (isset($this->_usedProperties['defaultDatabase'])) {
            $output['default_database'] = $this->defaultDatabase;
        }
        if (isset($this->_usedProperties['defaultCommitOptions'])) {
            $output['default_commit_options'] = $this->defaultCommitOptions->toArray();
        }
        if (isset($this->_usedProperties['controllerResolver'])) {
            $output['controller_resolver'] = $this->controllerResolver instanceof \Symfony\Config\DoctrineMongodb\ControllerResolverConfig ? $this->controllerResolver->toArray() : $this->controllerResolver;
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
