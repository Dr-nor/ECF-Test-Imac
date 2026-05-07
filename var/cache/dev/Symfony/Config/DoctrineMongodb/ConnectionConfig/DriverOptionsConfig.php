<?php

namespace Symfony\Config\DoctrineMongodb\ConnectionConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DriverOptionsConfig 
{
    private $context;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated Since doctrine/mongodb-odm-bundle 5.4: The "context" driver option is deprecated and will be removed in 3.0. This option is ignored by the MongoDB driver version 2.
     * @return $this
     */
    public function context($value): static
    {
        $this->_usedProperties['context'] = true;
        $this->context = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('context', $config)) {
            $this->_usedProperties['context'] = true;
            $this->context = $config['context'];
            unset($config['context']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['context'])) {
            $output['context'] = $this->context;
        }

        return $output;
    }

}
