<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'WebProfiler'.\DIRECTORY_SEPARATOR.'ToolbarConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class WebProfilerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $toolbar;
    private $interceptRedirects;
    private $excludedAjaxPaths;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * Profiler toolbar configuration
     * @default {"enabled":false,"ajax_replace":false}
     * @return \Symfony\Config\WebProfiler\ToolbarConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\WebProfiler\ToolbarConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function toolbar(array|bool $value = []): \Symfony\Config\WebProfiler\ToolbarConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['toolbar'] = true;
            $this->toolbar = $value;

            return $this;
        }

        if (!$this->toolbar instanceof \Symfony\Config\WebProfiler\ToolbarConfig) {
            $this->_usedProperties['toolbar'] = true;
            $this->toolbar = new \Symfony\Config\WebProfiler\ToolbarConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "toolbar()" has already been initialized. You cannot pass values the second time you call toolbar().');
        }

        return $this->toolbar;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function interceptRedirects($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['interceptRedirects'] = true;
        $this->interceptRedirects = $value;

        return $this;
    }

    /**
     * @default '^/((index|app(_[\\w]+)?)\\.php/)?_wdt'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function excludedAjaxPaths($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['excludedAjaxPaths'] = true;
        $this->excludedAjaxPaths = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'web_profiler';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('toolbar', $config)) {
            $this->_usedProperties['toolbar'] = true;
            $this->toolbar = \is_array($config['toolbar']) ? new \Symfony\Config\WebProfiler\ToolbarConfig($config['toolbar']) : $config['toolbar'];
            unset($config['toolbar']);
        }

        if (array_key_exists('intercept_redirects', $config)) {
            $this->_usedProperties['interceptRedirects'] = true;
            $this->interceptRedirects = $config['intercept_redirects'];
            unset($config['intercept_redirects']);
        }

        if (array_key_exists('excluded_ajax_paths', $config)) {
            $this->_usedProperties['excludedAjaxPaths'] = true;
            $this->excludedAjaxPaths = $config['excluded_ajax_paths'];
            unset($config['excluded_ajax_paths']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['toolbar'])) {
            $output['toolbar'] = $this->toolbar instanceof \Symfony\Config\WebProfiler\ToolbarConfig ? $this->toolbar->toArray() : $this->toolbar;
        }
        if (isset($this->_usedProperties['interceptRedirects'])) {
            $output['intercept_redirects'] = $this->interceptRedirects;
        }
        if (isset($this->_usedProperties['excludedAjaxPaths'])) {
            $output['excluded_ajax_paths'] = $this->excludedAjaxPaths;
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
