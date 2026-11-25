<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutSwishPaymentMethodOptions
 */
final class SwishPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The order reference that will be displayed to customers in the Swish application. Defaults to the `id` of the Payment Intent.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
