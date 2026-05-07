<?php

namespace Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TlsOptionsConfig 
{
    private $tlsCAFile;
    private $tlsCertificateKeyFile;
    private $tlsCertificateKeyFilePassword;
    private $tlsDisableOCSPEndpointCheck;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tlsCAFile($value): static
    {
        $this->_usedProperties['tlsCAFile'] = true;
        $this->tlsCAFile = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tlsCertificateKeyFile($value): static
    {
        $this->_usedProperties['tlsCertificateKeyFile'] = true;
        $this->tlsCertificateKeyFile = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tlsCertificateKeyFilePassword($value): static
    {
        $this->_usedProperties['tlsCertificateKeyFilePassword'] = true;
        $this->tlsCertificateKeyFilePassword = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tlsDisableOCSPEndpointCheck($value): static
    {
        $this->_usedProperties['tlsDisableOCSPEndpointCheck'] = true;
        $this->tlsDisableOCSPEndpointCheck = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('tlsCAFile', $config)) {
            $this->_usedProperties['tlsCAFile'] = true;
            $this->tlsCAFile = $config['tlsCAFile'];
            unset($config['tlsCAFile']);
        }

        if (array_key_exists('tlsCertificateKeyFile', $config)) {
            $this->_usedProperties['tlsCertificateKeyFile'] = true;
            $this->tlsCertificateKeyFile = $config['tlsCertificateKeyFile'];
            unset($config['tlsCertificateKeyFile']);
        }

        if (array_key_exists('tlsCertificateKeyFilePassword', $config)) {
            $this->_usedProperties['tlsCertificateKeyFilePassword'] = true;
            $this->tlsCertificateKeyFilePassword = $config['tlsCertificateKeyFilePassword'];
            unset($config['tlsCertificateKeyFilePassword']);
        }

        if (array_key_exists('tlsDisableOCSPEndpointCheck', $config)) {
            $this->_usedProperties['tlsDisableOCSPEndpointCheck'] = true;
            $this->tlsDisableOCSPEndpointCheck = $config['tlsDisableOCSPEndpointCheck'];
            unset($config['tlsDisableOCSPEndpointCheck']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['tlsCAFile'])) {
            $output['tlsCAFile'] = $this->tlsCAFile;
        }
        if (isset($this->_usedProperties['tlsCertificateKeyFile'])) {
            $output['tlsCertificateKeyFile'] = $this->tlsCertificateKeyFile;
        }
        if (isset($this->_usedProperties['tlsCertificateKeyFilePassword'])) {
            $output['tlsCertificateKeyFilePassword'] = $this->tlsCertificateKeyFilePassword;
        }
        if (isset($this->_usedProperties['tlsDisableOCSPEndpointCheck'])) {
            $output['tlsDisableOCSPEndpointCheck'] = $this->tlsDisableOCSPEndpointCheck;
        }

        return $output;
    }

}
