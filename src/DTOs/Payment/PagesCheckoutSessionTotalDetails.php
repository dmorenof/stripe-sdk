<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionTotalDetails
 */
final class PagesCheckoutSessionTotalDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_discount',
        'amount_tax',
    ];

    /**
     * This is the sum of all the discounts.
     */
    public int $amount_discount;
    /**
     * This is the sum of all the shipping amounts.
     */
    public ?int $amount_shipping;
    /**
     * This is the sum of all the tax amounts.
     */
    public int $amount_tax;
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionTotalDetailsResourceBreakdown $breakdown;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_discount' => is_int($value) ? $this->amount_discount = $value : parent::assignMember($name, $value),
            'amount_shipping' => $value === null || is_int($value) ? $this->amount_shipping = $value : parent::assignMember($name, $value),
            'amount_tax' => is_int($value) ? $this->amount_tax = $value : parent::assignMember($name, $value),
            'breakdown' => $value instanceof \stdClass ? $this->breakdown = new \StripeSDK\DTOs\Payment\PagesCheckoutSessionTotalDetailsResourceBreakdown($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
