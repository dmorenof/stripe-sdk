<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Satispay;

/**
 * display_preference_param
 */
final class DisplayPreferenceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\PaymentMethodConfigurations\ByConfiguration\Post\Satispay\DisplayPreference\PreferencePreferenceEnum $preference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'preference' => is_string($value) ? $this->preference = \StripeSDK\Enums\V1\PaymentMethodConfigurations\ByConfiguration\Post\Satispay\DisplayPreference\PreferencePreferenceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
