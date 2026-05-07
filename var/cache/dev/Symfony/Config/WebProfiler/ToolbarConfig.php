<?php

namespace Symfony\Config\WebProfiler;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ToolbarConfig 
{
    private $enabled;
    private $ajaxReplace;
    private $_usedProperties = [];

    /**
     * @default false
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
     * Replace toolbar on AJAX requests
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function ajaxReplace($value): static
    {
        $this->_usedProperties['ajaxReplace'] = true;
        $this->ajaxReplace = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('ajax_replace', $config)) {
            $this->_usedProperties['ajaxReplace'] = true;
            $this->ajaxReplace = $config['ajax_replace'];
            unset($config['ajax_replace']);
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
        if (isset($this->_usedProperties['ajaxReplace'])) {
            $output['ajax_replace'] = $this->ajaxReplace;
        }

        return $output;
    }

}
