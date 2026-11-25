<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post;

/**
 * recipient_shipping_with_optional_fields_address
 *
 * Shipping details for the invoice. The Invoice PDF will use the `shipping_details` value if it is set, otherwise the PDF will render the shipping address from the customer.
 */
final class ShippingDetailsRequest extends \Dmorenof\SdkRuntime\DTO
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

    public \StripeSDK\Requests\V1\Invoices\Post\ShippingDetails\DetailsAddressRequest $address;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \StripeSDK\Requests\V1\Invoices\Post\ShippingDetails\DetailsPhoneRequest $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
