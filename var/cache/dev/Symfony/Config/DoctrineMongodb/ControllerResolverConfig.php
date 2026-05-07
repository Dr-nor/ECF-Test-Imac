<?php

namespace Symfony\Config\DoctrineMongodb;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ControllerResolverConfig 
{
    private $enabled;
    private $autoMapping;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * Set to false to disable using route placeholders as lookup criteria when the object id doesn't match the argument name
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoMapping($value): static
    {
        $this->_usedProperties['autoMapping'] = true;
        $this->autoMapping = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('auto_mapping', $config)) {
            $this->_usedProperties['autoMapping'] = true;
            $this->autoMapping = $config['auto_mapping'];
            unset($config['auto_mapping']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['autoMapping'])) {
            $output['auto_mapping'] = $this->autoMapping;
        }

        return $output;
    }

}
