<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * wifi
 */
final class WifiVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\ConfigurationsWifiRequestVariant1\EapPeapRequest $enterprise_eap_peap;
    public \StripeSDK\Requests\ConfigurationsWifiRequestVariant1\EapTlsRequest $enterprise_eap_tls;
    public \StripeSDK\Requests\ConfigurationsWifiRequestVariant1\PersonalPskRequest $personal_psk;
    public \StripeSDK\Enums\ConfigurationsWifiRequestVariant1\ConfigurationsWifiRequestVariant1TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ConfigurationsWifiRequestVariant1\ConfigurationsWifiRequestVariant1TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
