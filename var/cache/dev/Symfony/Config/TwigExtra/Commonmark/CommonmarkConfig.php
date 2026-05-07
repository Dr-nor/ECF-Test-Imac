<?php

namespace Symfony\Config\TwigExtra\Commonmark;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CommonmarkConfig 
{
    private $enableEm;
    private $enableStrong;
    private $useAsterisk;
    private $useUnderscore;
    private $unorderedListMarkers;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableEm($value): static
    {
        $this->_usedProperties['enableEm'] = true;
        $this->enableEm = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableStrong($value): static
    {
        $this->_usedProperties['enableStrong'] = true;
        $this->enableStrong = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useAsterisk($value): static
    {
        $this->_usedProperties['useAsterisk'] = true;
        $this->useAsterisk = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useUnderscore($value): static
    {
        $this->_usedProperties['useUnderscore'] = true;
        $this->useUnderscore = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function unorderedListMarkers(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['unorderedListMarkers'] = true;
        $this->unorderedListMarkers = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enable_em', $config)) {
            $this->_usedProperties['enableEm'] = true;
            $this->enableEm = $config['enable_em'];
            unset($config['enable_em']);
        }

        if (array_key_exists('enable_strong', $config)) {
            $this->_usedProperties['enableStrong'] = true;
            $this->enableStrong = $config['enable_strong'];
            unset($config['enable_strong']);
        }

        if (array_key_exists('use_asterisk', $config)) {
            $this->_usedProperties['useAsterisk'] = true;
            $this->useAsterisk = $config['use_asterisk'];
            unset($config['use_asterisk']);
        }

        if (array_key_exists('use_underscore', $config)) {
            $this->_usedProperties['useUnderscore'] = true;
            $this->useUnderscore = $config['use_underscore'];
            unset($config['use_underscore']);
        }

        if (array_key_exists('unordered_list_markers', $config)) {
            $this->_usedProperties['unorderedListMarkers'] = true;
            $this->unorderedListMarkers = $config['unordered_list_markers'];
            unset($config['unordered_list_markers']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enableEm'])) {
            $output['enable_em'] = $this->enableEm;
        }
        if (isset($this->_usedProperties['enableStrong'])) {
            $output['enable_strong'] = $this->enableStrong;
        }
        if (isset($this->_usedProperties['useAsterisk'])) {
            $output['use_asterisk'] = $this->useAsterisk;
        }
        if (isset($this->_usedProperties['useUnderscore'])) {
            $output['use_underscore'] = $this->useUnderscore;
        }
        if (isset($this->_usedProperties['unorderedListMarkers'])) {
            $output['unordered_list_markers'] = $this->unorderedListMarkers;
        }

        return $output;
    }

}
