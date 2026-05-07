<?php

namespace Symfony\Config\DoctrineMongodb\ConnectionConfig\AutoEncryption;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class KmsProviderConfig 
{
    private $type;
    private $accessKeyId;
    private $secretAccessKey;
    private $sessionToken;
    private $tenantId;
    private $clientId;
    private $clientSecret;
    private $keyVaultEndpoint;
    private $identityPlatformEndpoint;
    private $keyName;
    private $keyVersion;
    private $email;
    private $privateKey;
    private $endpoint;
    private $projectId;
    private $location;
    private $keyRing;
    private $key;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accessKeyId($value): static
    {
        $this->_usedProperties['accessKeyId'] = true;
        $this->accessKeyId = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secretAccessKey($value): static
    {
        $this->_usedProperties['secretAccessKey'] = true;
        $this->secretAccessKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sessionToken($value): static
    {
        $this->_usedProperties['sessionToken'] = true;
        $this->sessionToken = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tenantId($value): static
    {
        $this->_usedProperties['tenantId'] = true;
        $this->tenantId = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clientId($value): static
    {
        $this->_usedProperties['clientId'] = true;
        $this->clientId = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clientSecret($value): static
    {
        $this->_usedProperties['clientSecret'] = true;
        $this->clientSecret = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function keyVaultEndpoint($value): static
    {
        $this->_usedProperties['keyVaultEndpoint'] = true;
        $this->keyVaultEndpoint = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function identityPlatformEndpoint($value): static
    {
        $this->_usedProperties['identityPlatformEndpoint'] = true;
        $this->identityPlatformEndpoint = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function keyName($value): static
    {
        $this->_usedProperties['keyName'] = true;
        $this->keyName = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function keyVersion($value): static
    {
        $this->_usedProperties['keyVersion'] = true;
        $this->keyVersion = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function email($value): static
    {
        $this->_usedProperties['email'] = true;
        $this->email = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function privateKey($value): static
    {
        $this->_usedProperties['privateKey'] = true;
        $this->privateKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function endpoint($value): static
    {
        $this->_usedProperties['endpoint'] = true;
        $this->endpoint = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function projectId($value): static
    {
        $this->_usedProperties['projectId'] = true;
        $this->projectId = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function location($value): static
    {
        $this->_usedProperties['location'] = true;
        $this->location = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function keyRing($value): static
    {
        $this->_usedProperties['keyRing'] = true;
        $this->keyRing = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function key($value): static
    {
        $this->_usedProperties['key'] = true;
        $this->key = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('type', $config)) {
            $this->_usedProperties['type'] = true;
            $this->type = $config['type'];
            unset($config['type']);
        }

        if (array_key_exists('accessKeyId', $config)) {
            $this->_usedProperties['accessKeyId'] = true;
            $this->accessKeyId = $config['accessKeyId'];
            unset($config['accessKeyId']);
        }

        if (array_key_exists('secretAccessKey', $config)) {
            $this->_usedProperties['secretAccessKey'] = true;
            $this->secretAccessKey = $config['secretAccessKey'];
            unset($config['secretAccessKey']);
        }

        if (array_key_exists('sessionToken', $config)) {
            $this->_usedProperties['sessionToken'] = true;
            $this->sessionToken = $config['sessionToken'];
            unset($config['sessionToken']);
        }

        if (array_key_exists('tenantId', $config)) {
            $this->_usedProperties['tenantId'] = true;
            $this->tenantId = $config['tenantId'];
            unset($config['tenantId']);
        }

        if (array_key_exists('clientId', $config)) {
            $this->_usedProperties['clientId'] = true;
            $this->clientId = $config['clientId'];
            unset($config['clientId']);
        }

        if (array_key_exists('clientSecret', $config)) {
            $this->_usedProperties['clientSecret'] = true;
            $this->clientSecret = $config['clientSecret'];
            unset($config['clientSecret']);
        }

        if (array_key_exists('keyVaultEndpoint', $config)) {
            $this->_usedProperties['keyVaultEndpoint'] = true;
            $this->keyVaultEndpoint = $config['keyVaultEndpoint'];
            unset($config['keyVaultEndpoint']);
        }

        if (array_key_exists('identityPlatformEndpoint', $config)) {
            $this->_usedProperties['identityPlatformEndpoint'] = true;
            $this->identityPlatformEndpoint = $config['identityPlatformEndpoint'];
            unset($config['identityPlatformEndpoint']);
        }

        if (array_key_exists('keyName', $config)) {
            $this->_usedProperties['keyName'] = true;
            $this->keyName = $config['keyName'];
            unset($config['keyName']);
        }

        if (array_key_exists('keyVersion', $config)) {
            $this->_usedProperties['keyVersion'] = true;
            $this->keyVersion = $config['keyVersion'];
            unset($config['keyVersion']);
        }

        if (array_key_exists('email', $config)) {
            $this->_usedProperties['email'] = true;
            $this->email = $config['email'];
            unset($config['email']);
        }

        if (array_key_exists('privateKey', $config)) {
            $this->_usedProperties['privateKey'] = true;
            $this->privateKey = $config['privateKey'];
            unset($config['privateKey']);
        }

        if (array_key_exists('endpoint', $config)) {
            $this->_usedProperties['endpoint'] = true;
            $this->endpoint = $config['endpoint'];
            unset($config['endpoint']);
        }

        if (array_key_exists('projectId', $config)) {
            $this->_usedProperties['projectId'] = true;
            $this->projectId = $config['projectId'];
            unset($config['projectId']);
        }

        if (array_key_exists('location', $config)) {
            $this->_usedProperties['location'] = true;
            $this->location = $config['location'];
            unset($config['location']);
        }

        if (array_key_exists('keyRing', $config)) {
            $this->_usedProperties['keyRing'] = true;
            $this->keyRing = $config['keyRing'];
            unset($config['keyRing']);
        }

        if (array_key_exists('key', $config)) {
            $this->_usedProperties['key'] = true;
            $this->key = $config['key'];
            unset($config['key']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['accessKeyId'])) {
            $output['accessKeyId'] = $this->accessKeyId;
        }
        if (isset($this->_usedProperties['secretAccessKey'])) {
            $output['secretAccessKey'] = $this->secretAccessKey;
        }
        if (isset($this->_usedProperties['sessionToken'])) {
            $output['sessionToken'] = $this->sessionToken;
        }
        if (isset($this->_usedProperties['tenantId'])) {
            $output['tenantId'] = $this->tenantId;
        }
        if (isset($this->_usedProperties['clientId'])) {
            $output['clientId'] = $this->clientId;
        }
        if (isset($this->_usedProperties['clientSecret'])) {
            $output['clientSecret'] = $this->clientSecret;
        }
        if (isset($this->_usedProperties['keyVaultEndpoint'])) {
            $output['keyVaultEndpoint'] = $this->keyVaultEndpoint;
        }
        if (isset($this->_usedProperties['identityPlatformEndpoint'])) {
            $output['identityPlatformEndpoint'] = $this->identityPlatformEndpoint;
        }
        if (isset($this->_usedProperties['keyName'])) {
            $output['keyName'] = $this->keyName;
        }
        if (isset($this->_usedProperties['keyVersion'])) {
            $output['keyVersion'] = $this->keyVersion;
        }
        if (isset($this->_usedProperties['email'])) {
            $output['email'] = $this->email;
        }
        if (isset($this->_usedProperties['privateKey'])) {
            $output['privateKey'] = $this->privateKey;
        }
        if (isset($this->_usedProperties['endpoint'])) {
            $output['endpoint'] = $this->endpoint;
        }
        if (isset($this->_usedProperties['projectId'])) {
            $output['projectId'] = $this->projectId;
        }
        if (isset($this->_usedProperties['location'])) {
            $output['location'] = $this->location;
        }
        if (isset($this->_usedProperties['keyRing'])) {
            $output['keyRing'] = $this->keyRing;
        }
        if (isset($this->_usedProperties['key'])) {
            $output['key'] = $this->key;
        }

        return $output;
    }

}
