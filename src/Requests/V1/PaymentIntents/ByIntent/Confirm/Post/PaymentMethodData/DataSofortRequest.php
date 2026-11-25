<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodData;

/**
 * param
 */
final class DataSofortRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
    ];

    public \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodData\Sofort\SofortCountryEnum $country;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodData\Sofort\SofortCountryEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
