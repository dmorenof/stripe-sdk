<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post;

/**
 * recipient_shipping_with_optional_fields_address
 *
 * Shipping information for this ConfirmationToken.
 */
final class ConfirmationTokensShippingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\Shipping\ShippingAddressRequest $address;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\Shipping\ShippingPhoneRequest $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
