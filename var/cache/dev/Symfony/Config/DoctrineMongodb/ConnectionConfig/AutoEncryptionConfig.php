<?php

namespace Symfony\Config\DoctrineMongodb\ConnectionConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AutoEncryption'.\DIRECTORY_SEPARATOR.'KmsProviderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AutoEncryption'.\DIRECTORY_SEPARATOR.'EncryptedFieldsMapConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AutoEncryption'.\DIRECTORY_SEPARATOR.'ExtraOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AutoEncryption'.\DIRECTORY_SEPARATOR.'TlsOptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AutoEncryptionConfig 
{
    private $bypassAutoEncryption;
    private $keyVaultClient;
    private $keyVaultNamespace;
    private $masterKey;
    private $kmsProvider;
    private $schemaMap;
    private $encryptedFieldsMap;
    private $extraOptions;
    private $bypassQueryAnalysis;
    private $tlsOptions;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function bypassAutoEncryption($value): static
    {
        $this->_usedProperties['bypassAutoEncryption'] = true;
        $this->bypassAutoEncryption = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function keyVaultClient($value): static
    {
        $this->_usedProperties['keyVaultClient'] = true;
        $this->keyVaultClient = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function keyVaultNamespace($value): static
    {
        $this->_usedProperties['keyVaultNamespace'] = true;
        $this->keyVaultNamespace = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function masterKey(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['masterKey'] = true;
        $this->masterKey = $value;

        return $this;
    }

    public function kmsProvider(array $value = []): \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\KmsProviderConfig
    {
        if (null === $this->kmsProvider) {
            $this->_usedProperties['kmsProvider'] = true;
            $this->kmsProvider = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\KmsProviderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "kmsProvider()" has already been initialized. You cannot pass values the second time you call kmsProvider().');
        }

        return $this->kmsProvider;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function schemaMap(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['schemaMap'] = true;
        $this->schemaMap = $value;

        return $this;
    }

    public function encryptedFieldsMap(string $name, array $value = []): \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig
    {
        if (!isset($this->encryptedFieldsMap[$name])) {
            $this->_usedProperties['encryptedFieldsMap'] = true;
            $this->encryptedFieldsMap[$name] = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "encryptedFieldsMap()" has already been initialized. You cannot pass values the second time you call encryptedFieldsMap().');
        }

        return $this->encryptedFieldsMap[$name];
    }

    public function extraOptions(array $value = []): \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\ExtraOptionsConfig
    {
        if (null === $this->extraOptions) {
            $this->_usedProperties['extraOptions'] = true;
            $this->extraOptions = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\ExtraOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "extraOptions()" has already been initialized. You cannot pass values the second time you call extraOptions().');
        }

        return $this->extraOptions;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function bypassQueryAnalysis($value): static
    {
        $this->_usedProperties['bypassQueryAnalysis'] = true;
        $this->bypassQueryAnalysis = $value;

        return $this;
    }

    public function tlsOptions(array $value = []): \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\TlsOptionsConfig
    {
        if (null === $this->tlsOptions) {
            $this->_usedProperties['tlsOptions'] = true;
            $this->tlsOptions = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\TlsOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tlsOptions()" has already been initialized. You cannot pass values the second time you call tlsOptions().');
        }

        return $this->tlsOptions;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('bypassAutoEncryption', $config)) {
            $this->_usedProperties['bypassAutoEncryption'] = true;
            $this->bypassAutoEncryption = $config['bypassAutoEncryption'];
            unset($config['bypassAutoEncryption']);
        }

        if (array_key_exists('keyVaultClient', $config)) {
            $this->_usedProperties['keyVaultClient'] = true;
            $this->keyVaultClient = $config['keyVaultClient'];
            unset($config['keyVaultClient']);
        }

        if (array_key_exists('keyVaultNamespace', $config)) {
            $this->_usedProperties['keyVaultNamespace'] = true;
            $this->keyVaultNamespace = $config['keyVaultNamespace'];
            unset($config['keyVaultNamespace']);
        }

        if (array_key_exists('masterKey', $config)) {
            $this->_usedProperties['masterKey'] = true;
            $this->masterKey = $config['masterKey'];
            unset($config['masterKey']);
        }

        if (array_key_exists('kmsProvider', $config)) {
            $this->_usedProperties['kmsProvider'] = true;
            $this->kmsProvider = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\KmsProviderConfig($config['kmsProvider']);
            unset($config['kmsProvider']);
        }

        if (array_key_exists('schemaMap', $config)) {
            $this->_usedProperties['schemaMap'] = true;
            $this->schemaMap = $config['schemaMap'];
            unset($config['schemaMap']);
        }

        if (array_key_exists('encryptedFieldsMap', $config)) {
            $this->_usedProperties['encryptedFieldsMap'] = true;
            $this->encryptedFieldsMap = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig($v) : $v, $config['encryptedFieldsMap']);
            unset($config['encryptedFieldsMap']);
        }

        if (array_key_exists('extraOptions', $config)) {
            $this->_usedProperties['extraOptions'] = true;
            $this->extraOptions = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\ExtraOptionsConfig($config['extraOptions']);
            unset($config['extraOptions']);
        }

        if (array_key_exists('bypassQueryAnalysis', $config)) {
            $this->_usedProperties['bypassQueryAnalysis'] = true;
            $this->bypassQueryAnalysis = $config['bypassQueryAnalysis'];
            unset($config['bypassQueryAnalysis']);
        }

        if (array_key_exists('tlsOptions', $config)) {
            $this->_usedProperties['tlsOptions'] = true;
            $this->tlsOptions = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\TlsOptionsConfig($config['tlsOptions']);
            unset($config['tlsOptions']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['bypassAutoEncryption'])) {
            $output['bypassAutoEncryption'] = $this->bypassAutoEncryption;
        }
        if (isset($this->_usedProperties['keyVaultClient'])) {
            $output['keyVaultClient'] = $this->keyVaultClient;
        }
        if (isset($this->_usedProperties['keyVaultNamespace'])) {
            $output['keyVaultNamespace'] = $this->keyVaultNamespace;
        }
        if (isset($this->_usedProperties['masterKey'])) {
            $output['masterKey'] = $this->masterKey;
        }
        if (isset($this->_usedProperties['kmsProvider'])) {
            $output['kmsProvider'] = $this->kmsProvider->toArray();
        }
        if (isset($this->_usedProperties['schemaMap'])) {
            $output['schemaMap'] = $this->schemaMap;
        }
        if (isset($this->_usedProperties['encryptedFieldsMap'])) {
            $output['encryptedFieldsMap'] = array_map(fn ($v) => $v instanceof \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig ? $v->toArray() : $v, $this->encryptedFieldsMap);
        }
        if (isset($this->_usedProperties['extraOptions'])) {
            $output['extraOptions'] = $this->extraOptions->toArray();
        }
        if (isset($this->_usedProperties['bypassQueryAnalysis'])) {
            $output['bypassQueryAnalysis'] = $this->bypassQueryAnalysis;
        }
        if (isset($this->_usedProperties['tlsOptions'])) {
            $output['tlsOptions'] = $this->tlsOptions->toArray();
        }

        return $output;
    }

}
