<?php

namespace Symfony\Config\TwigExtra\Commonmark;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SlugNormalizerConfig 
{
    private $instance;
    private $maxLength;
    private $unique;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function instance(mixed $value): static
    {
        $this->_usedProperties['instance'] = true;
        $this->instance = $value;

        return $this;
    }

    /**
     * @default 255
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxLength($value): static
    {
        $this->_usedProperties['maxLength'] = true;
        $this->maxLength = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function unique(mixed $value): static
    {
        $this->_usedProperties['unique'] = true;
        $this->unique = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('instance', $config)) {
            $this->_usedProperties['instance'] = true;
            $this->instance = $config['instance'];
            unset($config['instance']);
        }

        if (array_key_exists('max_length', $config)) {
            $this->_usedProperties['maxLength'] = true;
            $this->maxLength = $config['max_length'];
            unset($config['max_length']);
        }

        if (array_key_exists('unique', $config)) {
            $this->_usedProperties['unique'] = true;
            $this->unique = $config['unique'];
            unset($config['unique']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['instance'])) {
            $output['instance'] = $this->instance;
        }
        if (isset($this->_usedProperties['maxLength'])) {
            $output['max_length'] = $this->maxLength;
        }
        if (isset($this->_usedProperties['unique'])) {
            $output['unique'] = $this->unique;
        }

        return $output;
    }

}
