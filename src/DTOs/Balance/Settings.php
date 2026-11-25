<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * Balance Setting
 *
 * Options for customizing account balances and payout settings for a Stripe platform’s connected accounts.
 */
final class Settings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'object_',
        'payments',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Balance\Settings\ObjectEnum $object_;
    public \StripeSDK\DTOs\Balance\SettingsResourcePayments $payments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Balance\Settings\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payments' => $value instanceof \stdClass ? $this->payments = new \StripeSDK\DTOs\Balance\SettingsResourcePayments($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
