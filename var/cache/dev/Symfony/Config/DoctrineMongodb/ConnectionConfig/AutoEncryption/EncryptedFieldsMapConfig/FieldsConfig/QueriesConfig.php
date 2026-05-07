<?php

namespace Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption\EncryptedFieldsMapConfig\FieldsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class QueriesConfig 
{
    private $queryType;
    private $min;
    private $max;
    private $sparsity;
    private $precision;
    private $trimFactor;
    private $contention;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function queryType($value): static
    {
        $this->_usedProperties['queryType'] = true;
        $this->queryType = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function min(mixed $value): static
    {
        $this->_usedProperties['min'] = true;
        $this->min = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function max(mixed $value): static
    {
        $this->_usedProperties['max'] = true;
        $this->max = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function sparsity($value): static
    {
        $this->_usedProperties['sparsity'] = true;
        $this->sparsity = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function precision($value): static
    {
        $this->_usedProperties['precision'] = true;
        $this->precision = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function trimFactor($value): static
    {
        $this->_usedProperties['trimFactor'] = true;
        $this->trimFactor = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function contention($value): static
    {
        $this->_usedProperties['contention'] = true;
        $this->contention = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('queryType', $config)) {
            $this->_usedProperties['queryType'] = true;
            $this->queryType = $config['queryType'];
            unset($config['queryType']);
        }

        if (array_key_exists('min', $config)) {
            $this->_usedProperties['min'] = true;
            $this->min = $config['min'];
            unset($config['min']);
        }

        if (array_key_exists('max', $config)) {
            $this->_usedProperties['max'] = true;
            $this->max = $config['max'];
            unset($config['max']);
        }

        if (array_key_exists('sparsity', $config)) {
            $this->_usedProperties['sparsity'] = true;
            $this->sparsity = $config['sparsity'];
            unset($config['sparsity']);
        }

        if (array_key_exists('precision', $config)) {
            $this->_usedProperties['precision'] = true;
            $this->precision = $config['precision'];
            unset($config['precision']);
        }

        if (array_key_exists('trimFactor', $config)) {
            $this->_usedProperties['trimFactor'] = true;
            $this->trimFactor = $config['trimFactor'];
            unset($config['trimFactor']);
        }

        if (array_key_exists('contention', $config)) {
            $this->_usedProperties['contention'] = true;
            $this->contention = $config['contention'];
            unset($config['contention']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['queryType'])) {
            $output['queryType'] = $this->queryType;
        }
        if (isset($this->_usedProperties['min'])) {
            $output['min'] = $this->min;
        }
        if (isset($this->_usedProperties['max'])) {
            $output['max'] = $this->max;
        }
        if (isset($this->_usedProperties['sparsity'])) {
            $output['sparsity'] = $this->sparsity;
        }
        if (isset($this->_usedProperties['precision'])) {
            $output['precision'] = $this->precision;
        }
        if (isset($this->_usedProperties['trimFactor'])) {
            $output['trimFactor'] = $this->trimFactor;
        }
        if (isset($this->_usedProperties['contention'])) {
            $output['contention'] = $this->contention;
        }

        return $output;
    }

}
