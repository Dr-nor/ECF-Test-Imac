<?php

namespace Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'FieldsConfig'.\DIRECTORY_SEPARATOR.'QueriesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FieldsConfig 
{
    private $path;
    private $bsonType;
    private $keyId;
    private $queries;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): static
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bsonType($value): static
    {
        $this->_usedProperties['bsonType'] = true;
        $this->bsonType = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function keyId(mixed $value): static
    {
        $this->_usedProperties['keyId'] = true;
        $this->keyId = $value;

        return $this;
    }

    public function queries(array $value = []): \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig\FieldsConfig\QueriesConfig
    {
        if (null === $this->queries) {
            $this->_usedProperties['queries'] = true;
            $this->queries = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig\FieldsConfig\QueriesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "queries()" has already been initialized. You cannot pass values the second time you call queries().');
        }

        return $this->queries;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('path', $config)) {
            $this->_usedProperties['path'] = true;
            $this->path = $config['path'];
            unset($config['path']);
        }

        if (array_key_exists('bsonType', $config)) {
            $this->_usedProperties['bsonType'] = true;
            $this->bsonType = $config['bsonType'];
            unset($config['bsonType']);
        }

        if (array_key_exists('keyId', $config)) {
            $this->_usedProperties['keyId'] = true;
            $this->keyId = $config['keyId'];
            unset($config['keyId']);
        }

        if (array_key_exists('queries', $config)) {
            $this->_usedProperties['queries'] = true;
            $this->queries = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig\FieldsConfig\QueriesConfig($config['queries']);
            unset($config['queries']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['bsonType'])) {
            $output['bsonType'] = $this->bsonType;
        }
        if (isset($this->_usedProperties['keyId'])) {
            $output['keyId'] = $this->keyId;
        }
        if (isset($this->_usedProperties['queries'])) {
            $output['queries'] = $this->queries->toArray();
        }

        return $output;
    }

}
