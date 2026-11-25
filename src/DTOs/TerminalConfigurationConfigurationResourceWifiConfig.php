<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TerminalConfigurationConfigurationResourceWifiConfig
 */
final class TerminalConfigurationConfigurationResourceWifiConfig extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceEnterprisePeapWifi $enterprise_eap_peap;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceEnterpriseTlsWifi $enterprise_eap_tls;
    public \StripeSDK\DTOs\TerminalConfigurationConfigurationResourcePersonalPskWifi $personal_psk;
    /**
     * Security type of the WiFi network. The hash with the corresponding name contains the credentials for this security type.
     */
    public \StripeSDK\Enums\TerminalConfigurationConfigurationResourceWifiConfig\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enterprise_eap_peap' => $value instanceof \stdClass ? $this->enterprise_eap_peap = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceEnterprisePeapWifi($value) : parent::assignMember($name, $value),
            'enterprise_eap_tls' => $value instanceof \stdClass ? $this->enterprise_eap_tls = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourceEnterpriseTlsWifi($value) : parent::assignMember($name, $value),
            'personal_psk' => $value instanceof \stdClass ? $this->personal_psk = new \StripeSDK\DTOs\TerminalConfigurationConfigurationResourcePersonalPskWifi($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TerminalConfigurationConfigurationResourceWifiConfig\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
