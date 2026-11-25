<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\Post;

/**
 * param
 *
 * If this is a `sofort` PaymentMethod, this hash contains details about the SOFORT payment method.
 */
final class PaymentMethodsSofortRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
    ];

    public \StripeSDK\Enums\V1\PaymentMethods\Post\Sofort\SofortCountryEnum $country;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = \StripeSDK\Enums\V1\PaymentMethods\Post\Sofort\SofortCountryEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
