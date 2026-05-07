<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'HtmlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'MarkdownConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'IntlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'CssinlinerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'InkyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'StringConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'CommonmarkConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwigExtraConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $cache;
    private $html;
    private $markdown;
    private $intl;
    private $cssinliner;
    private $inky;
    private $string;
    private $commonmark;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\CacheConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\CacheConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function cache(array|bool $value = []): \Symfony\Config\TwigExtra\CacheConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = $value;

            return $this;
        }

        if (!$this->cache instanceof \Symfony\Config\TwigExtra\CacheConfig) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\TwigExtra\CacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }

        return $this->cache;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\HtmlConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\HtmlConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function html(array|bool $value = []): \Symfony\Config\TwigExtra\HtmlConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['html'] = true;
            $this->html = $value;

            return $this;
        }

        if (!$this->html instanceof \Symfony\Config\TwigExtra\HtmlConfig) {
            $this->_usedProperties['html'] = true;
            $this->html = new \Symfony\Config\TwigExtra\HtmlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "html()" has already been initialized. You cannot pass values the second time you call html().');
        }

        return $this->html;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\MarkdownConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\MarkdownConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function markdown(array|bool $value = []): \Symfony\Config\TwigExtra\MarkdownConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['markdown'] = true;
            $this->markdown = $value;

            return $this;
        }

        if (!$this->markdown instanceof \Symfony\Config\TwigExtra\MarkdownConfig) {
            $this->_usedProperties['markdown'] = true;
            $this->markdown = new \Symfony\Config\TwigExtra\MarkdownConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "markdown()" has already been initialized. You cannot pass values the second time you call markdown().');
        }

        return $this->markdown;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\IntlConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\IntlConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function intl(array|bool $value = []): \Symfony\Config\TwigExtra\IntlConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['intl'] = true;
            $this->intl = $value;

            return $this;
        }

        if (!$this->intl instanceof \Symfony\Config\TwigExtra\IntlConfig) {
            $this->_usedProperties['intl'] = true;
            $this->intl = new \Symfony\Config\TwigExtra\IntlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "intl()" has already been initialized. You cannot pass values the second time you call intl().');
        }

        return $this->intl;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\CssinlinerConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\CssinlinerConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function cssinliner(array|bool $value = []): \Symfony\Config\TwigExtra\CssinlinerConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['cssinliner'] = true;
            $this->cssinliner = $value;

            return $this;
        }

        if (!$this->cssinliner instanceof \Symfony\Config\TwigExtra\CssinlinerConfig) {
            $this->_usedProperties['cssinliner'] = true;
            $this->cssinliner = new \Symfony\Config\TwigExtra\CssinlinerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cssinliner()" has already been initialized. You cannot pass values the second time you call cssinliner().');
        }

        return $this->cssinliner;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\InkyConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\InkyConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function inky(array|bool $value = []): \Symfony\Config\TwigExtra\InkyConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['inky'] = true;
            $this->inky = $value;

            return $this;
        }

        if (!$this->inky instanceof \Symfony\Config\TwigExtra\InkyConfig) {
            $this->_usedProperties['inky'] = true;
            $this->inky = new \Symfony\Config\TwigExtra\InkyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "inky()" has already been initialized. You cannot pass values the second time you call inky().');
        }

        return $this->inky;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\StringConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\StringConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function string(array|bool $value = []): \Symfony\Config\TwigExtra\StringConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['string'] = true;
            $this->string = $value;

            return $this;
        }

        if (!$this->string instanceof \Symfony\Config\TwigExtra\StringConfig) {
            $this->_usedProperties['string'] = true;
            $this->string = new \Symfony\Config\TwigExtra\StringConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "string()" has already been initialized. You cannot pass values the second time you call string().');
        }

        return $this->string;
    }

    /**
     * @deprecated since Symfony 7.4
     */
    public function commonmark(array $value = []): \Symfony\Config\TwigExtra\CommonmarkConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->commonmark) {
            $this->_usedProperties['commonmark'] = true;
            $this->commonmark = new \Symfony\Config\TwigExtra\CommonmarkConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "commonmark()" has already been initialized. You cannot pass values the second time you call commonmark().');
        }

        return $this->commonmark;
    }

    public function getExtensionAlias(): string
    {
        return 'twig_extra';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('cache', $config)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = \is_array($config['cache']) ? new \Symfony\Config\TwigExtra\CacheConfig($config['cache']) : $config['cache'];
            unset($config['cache']);
        }

        if (array_key_exists('html', $config)) {
            $this->_usedProperties['html'] = true;
            $this->html = \is_array($config['html']) ? new \Symfony\Config\TwigExtra\HtmlConfig($config['html']) : $config['html'];
            unset($config['html']);
        }

        if (array_key_exists('markdown', $config)) {
            $this->_usedProperties['markdown'] = true;
            $this->markdown = \is_array($config['markdown']) ? new \Symfony\Config\TwigExtra\MarkdownConfig($config['markdown']) : $config['markdown'];
            unset($config['markdown']);
        }

        if (array_key_exists('intl', $config)) {
            $this->_usedProperties['intl'] = true;
            $this->intl = \is_array($config['intl']) ? new \Symfony\Config\TwigExtra\IntlConfig($config['intl']) : $config['intl'];
            unset($config['intl']);
        }

        if (array_key_exists('cssinliner', $config)) {
            $this->_usedProperties['cssinliner'] = true;
            $this->cssinliner = \is_array($config['cssinliner']) ? new \Symfony\Config\TwigExtra\CssinlinerConfig($config['cssinliner']) : $config['cssinliner'];
            unset($config['cssinliner']);
        }

        if (array_key_exists('inky', $config)) {
            $this->_usedProperties['inky'] = true;
            $this->inky = \is_array($config['inky']) ? new \Symfony\Config\TwigExtra\InkyConfig($config['inky']) : $config['inky'];
            unset($config['inky']);
        }

        if (array_key_exists('string', $config)) {
            $this->_usedProperties['string'] = true;
            $this->string = \is_array($config['string']) ? new \Symfony\Config\TwigExtra\StringConfig($config['string']) : $config['string'];
            unset($config['string']);
        }

        if (array_key_exists('commonmark', $config)) {
            $this->_usedProperties['commonmark'] = true;
            $this->commonmark = new \Symfony\Config\TwigExtra\CommonmarkConfig($config['commonmark']);
            unset($config['commonmark']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache instanceof \Symfony\Config\TwigExtra\CacheConfig ? $this->cache->toArray() : $this->cache;
        }
        if (isset($this->_usedProperties['html'])) {
            $output['html'] = $this->html instanceof \Symfony\Config\TwigExtra\HtmlConfig ? $this->html->toArray() : $this->html;
        }
        if (isset($this->_usedProperties['markdown'])) {
            $output['markdown'] = $this->markdown instanceof \Symfony\Config\TwigExtra\MarkdownConfig ? $this->markdown->toArray() : $this->markdown;
        }
        if (isset($this->_usedProperties['intl'])) {
            $output['intl'] = $this->intl instanceof \Symfony\Config\TwigExtra\IntlConfig ? $this->intl->toArray() : $this->intl;
        }
        if (isset($this->_usedProperties['cssinliner'])) {
            $output['cssinliner'] = $this->cssinliner instanceof \Symfony\Config\TwigExtra\CssinlinerConfig ? $this->cssinliner->toArray() : $this->cssinliner;
        }
        if (isset($this->_usedProperties['inky'])) {
            $output['inky'] = $this->inky instanceof \Symfony\Config\TwigExtra\InkyConfig ? $this->inky->toArray() : $this->inky;
        }
        if (isset($this->_usedProperties['string'])) {
            $output['string'] = $this->string instanceof \Symfony\Config\TwigExtra\StringConfig ? $this->string->toArray() : $this->string;
        }
        if (isset($this->_usedProperties['commonmark'])) {
            $output['commonmark'] = $this->commonmark->toArray();
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
