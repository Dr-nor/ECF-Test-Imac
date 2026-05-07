<?php

namespace Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption;

require_once __DIR__.\DIRECTORY_SEPARATOR.'EncryptedFieldsMapConfig'.\DIRECTORY_SEPARATOR.'FieldsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EncryptedFieldsMapConfig 
{
    private $fields;
    private $_usedProperties = [];

    public function fields(array $value = []): \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig\FieldsConfig
    {
        $this->_usedProperties['fields'] = true;

        return $this->fields[] = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig\FieldsConfig($value);
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('fields', $config)) {
            $this->_usedProperties['fields'] = true;
            $this->fields = array_map(fn ($v) => new \Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig\FieldsConfig($v), $config['fields']);
            unset($config['fields']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['fields'])) {
            $output['fields'] = array_map(fn ($v) => $v->toArray(), $this->fields);
        }

        return $output;
    }

}
