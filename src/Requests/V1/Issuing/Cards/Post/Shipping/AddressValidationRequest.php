<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cards\Post\Shipping;

/**
 * address_validation_param
 */
final class AddressValidationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mode',
    ];

    public \StripeSDK\Enums\V1\Issuing\Cards\Post\Shipping\AddressValidation\ValidationModeEnum $mode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mode' => is_string($value) ? $this->mode = \StripeSDK\Enums\V1\Issuing\Cards\Post\Shipping\AddressValidation\ValidationModeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
