<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentMethodConfigResourceDisplayPreference
 */
final class MethodConfigResourceDisplayPreference extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'preference',
        'value',
    ];

    /**
     * For child configs, whether or not the account's preference will be observed. If `false`, the parent configuration's default is used.
     */
    public ?bool $overridable;
    /**
     * The account's display preference.
     */
    public \StripeSDK\Enums\Payment\MethodConfigResourceDisplayPreference\PreferenceEnum $preference;
    /**
     * The effective display preference value.
     */
    public \StripeSDK\Enums\Payment\MethodConfigResourceDisplayPreference\ValueEnum $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'overridable' => $value === null || is_bool($value) ? $this->overridable = $value : parent::assignMember($name, $value),
            'preference' => is_string($value) ? $this->preference = \StripeSDK\Enums\Payment\MethodConfigResourceDisplayPreference\PreferenceEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = \StripeSDK\Enums\Payment\MethodConfigResourceDisplayPreference\ValueEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
