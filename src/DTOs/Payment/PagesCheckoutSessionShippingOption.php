<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionShippingOption
 */
final class PagesCheckoutSessionShippingOption extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'shipping_amount',
        'shipping_rate',
    ];

    /**
     * A non-negative integer in cents representing how much to charge.
     */
    public int $shipping_amount;
    /**
     * The shipping rate.
     */
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionShippingOption\ShippingRateDTO $shipping_rate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'shipping_amount' => is_int($value) ? $this->shipping_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
