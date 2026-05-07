<?php

namespace Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ExtraOptionsConfig 
{
    private $mongocryptdURI;
    private $mongocryptdBypassSpawn;
    private $mongocryptdSpawnPath;
    private $mongocryptdSpawnArgs;
    private $cryptSharedLibPath;
    private $cryptSharedLibRequired;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mongocryptdURI($value): static
    {
        $this->_usedProperties['mongocryptdURI'] = true;
        $this->mongocryptdURI = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function mongocryptdBypassSpawn($value): static
    {
        $this->_usedProperties['mongocryptdBypassSpawn'] = true;
        $this->mongocryptdBypassSpawn = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mongocryptdSpawnPath($value): static
    {
        $this->_usedProperties['mongocryptdSpawnPath'] = true;
        $this->mongocryptdSpawnPath = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function mongocryptdSpawnArgs(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['mongocryptdSpawnArgs'] = true;
        $this->mongocryptdSpawnArgs = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cryptSharedLibPath($value): static
    {
        $this->_usedProperties['cryptSharedLibPath'] = true;
        $this->cryptSharedLibPath = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function cryptSharedLibRequired($value): static
    {
        $this->_usedProperties['cryptSharedLibRequired'] = true;
        $this->cryptSharedLibRequired = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('mongocryptdURI', $config)) {
            $this->_usedProperties['mongocryptdURI'] = true;
            $this->mongocryptdURI = $config['mongocryptdURI'];
            unset($config['mongocryptdURI']);
        }

        if (array_key_exists('mongocryptdBypassSpawn', $config)) {
            $this->_usedProperties['mongocryptdBypassSpawn'] = true;
            $this->mongocryptdBypassSpawn = $config['mongocryptdBypassSpawn'];
            unset($config['mongocryptdBypassSpawn']);
        }

        if (array_key_exists('mongocryptdSpawnPath', $config)) {
            $this->_usedProperties['mongocryptdSpawnPath'] = true;
            $this->mongocryptdSpawnPath = $config['mongocryptdSpawnPath'];
            unset($config['mongocryptdSpawnPath']);
        }

        if (array_key_exists('mongocryptdSpawnArgs', $config)) {
            $this->_usedProperties['mongocryptdSpawnArgs'] = true;
            $this->mongocryptdSpawnArgs = $config['mongocryptdSpawnArgs'];
            unset($config['mongocryptdSpawnArgs']);
        }

        if (array_key_exists('cryptSharedLibPath', $config)) {
            $this->_usedProperties['cryptSharedLibPath'] = true;
            $this->cryptSharedLibPath = $config['cryptSharedLibPath'];
            unset($config['cryptSharedLibPath']);
        }

        if (array_key_exists('cryptSharedLibRequired', $config)) {
            $this->_usedProperties['cryptSharedLibRequired'] = true;
            $this->cryptSharedLibRequired = $config['cryptSharedLibRequired'];
            unset($config['cryptSharedLibRequired']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['mongocryptdURI'])) {
            $output['mongocryptdURI'] = $this->mongocryptdURI;
        }
        if (isset($this->_usedProperties['mongocryptdBypassSpawn'])) {
            $output['mongocryptdBypassSpawn'] = $this->mongocryptdBypassSpawn;
        }
        if (isset($this->_usedProperties['mongocryptdSpawnPath'])) {
            $output['mongocryptdSpawnPath'] = $this->mongocryptdSpawnPath;
        }
        if (isset($this->_usedProperties['mongocryptdSpawnArgs'])) {
            $output['mongocryptdSpawnArgs'] = $this->mongocryptdSpawnArgs;
        }
        if (isset($this->_usedProperties['cryptSharedLibPath'])) {
            $output['cryptSharedLibPath'] = $this->cryptSharedLibPath;
        }
        if (isset($this->_usedProperties['cryptSharedLibRequired'])) {
            $output['cryptSharedLibRequired'] = $this->cryptSharedLibRequired;
        }

        return $output;
    }

}
