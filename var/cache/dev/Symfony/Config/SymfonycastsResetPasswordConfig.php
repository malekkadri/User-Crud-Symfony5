<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SymfonycastsResetPasswordConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $requestPasswordRepository;
    private $lifetime;
    private $throttleLimit;
    private $enableGarbageCollection;
    private $_usedProperties = [];

    /**
     * A class that implements ResetPasswordRequestRepositoryInterface - usually your ResetPasswordRequestRepository.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function requestPasswordRepository($value): self
    {
        $this->_usedProperties['requestPasswordRepository'] = true;
        $this->requestPasswordRepository = $value;

        return $this;
    }

    /**
     * The length of time in seconds that a password reset request is valid for after it is created.
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function lifetime($value): self
    {
        $this->_usedProperties['lifetime'] = true;
        $this->lifetime = $value;

        return $this;
    }

    /**
     * Another password reset cannot be made faster than this throttle time in seconds.
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function throttleLimit($value): self
    {
        $this->_usedProperties['throttleLimit'] = true;
        $this->throttleLimit = $value;

        return $this;
    }

    /**
     * Enable/Disable automatic garbage collection.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableGarbageCollection($value): self
    {
        $this->_usedProperties['enableGarbageCollection'] = true;
        $this->enableGarbageCollection = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'symfonycasts_reset_password';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('request_password_repository', $value)) {
            $this->_usedProperties['requestPasswordRepository'] = true;
            $this->requestPasswordRepository = $value['request_password_repository'];
            unset($value['request_password_repository']);
        }

        if (array_key_exists('lifetime', $value)) {
            $this->_usedProperties['lifetime'] = true;
            $this->lifetime = $value['lifetime'];
            unset($value['lifetime']);
        }

        if (array_key_exists('throttle_limit', $value)) {
            $this->_usedProperties['throttleLimit'] = true;
            $this->throttleLimit = $value['throttle_limit'];
            unset($value['throttle_limit']);
        }

        if (array_key_exists('enable_garbage_collection', $value)) {
            $this->_usedProperties['enableGarbageCollection'] = true;
            $this->enableGarbageCollection = $value['enable_garbage_collection'];
            unset($value['enable_garbage_collection']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['requestPasswordRepository'])) {
            $output['request_password_repository'] = $this->requestPasswordRepository;
        }
        if (isset($this->_usedProperties['lifetime'])) {
            $output['lifetime'] = $this->lifetime;
        }
        if (isset($this->_usedProperties['throttleLimit'])) {
            $output['throttle_limit'] = $this->throttleLimit;
        }
        if (isset($this->_usedProperties['enableGarbageCollection'])) {
            $output['enable_garbage_collection'] = $this->enableGarbageCollection;
        }

        return $output;
    }

}
