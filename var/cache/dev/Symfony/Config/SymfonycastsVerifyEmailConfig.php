<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SymfonycastsVerifyEmailConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $lifetime;
    private $_usedProperties = [];

    /**
     * The length of time in seconds that a signed URI is valid for after it is created.
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

    public function getExtensionAlias(): string
    {
        return 'symfonycasts_verify_email';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('lifetime', $value)) {
            $this->_usedProperties['lifetime'] = true;
            $this->lifetime = $value['lifetime'];
            unset($value['lifetime']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['lifetime'])) {
            $output['lifetime'] = $this->lifetime;
        }

        return $output;
    }

}
