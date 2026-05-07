<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MakerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $rootNamespace;
    private $generateFinalClasses;
    private $generateFinalEntities;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @default 'App'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function rootNamespace($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['rootNamespace'] = true;
        $this->rootNamespace = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function generateFinalClasses($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['generateFinalClasses'] = true;
        $this->generateFinalClasses = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function generateFinalEntities($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['generateFinalEntities'] = true;
        $this->generateFinalEntities = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'maker';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('root_namespace', $config)) {
            $this->_usedProperties['rootNamespace'] = true;
            $this->rootNamespace = $config['root_namespace'];
            unset($config['root_namespace']);
        }

        if (array_key_exists('generate_final_classes', $config)) {
            $this->_usedProperties['generateFinalClasses'] = true;
            $this->generateFinalClasses = $config['generate_final_classes'];
            unset($config['generate_final_classes']);
        }

        if (array_key_exists('generate_final_entities', $config)) {
            $this->_usedProperties['generateFinalEntities'] = true;
            $this->generateFinalEntities = $config['generate_final_entities'];
            unset($config['generate_final_entities']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['rootNamespace'])) {
            $output['root_namespace'] = $this->rootNamespace;
        }
        if (isset($this->_usedProperties['generateFinalClasses'])) {
            $output['generate_final_classes'] = $this->generateFinalClasses;
        }
        if (isset($this->_usedProperties['generateFinalEntities'])) {
            $output['generate_final_entities'] = $this->generateFinalEntities;
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
