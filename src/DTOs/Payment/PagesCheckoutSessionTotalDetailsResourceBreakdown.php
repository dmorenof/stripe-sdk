<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionTotalDetailsResourceBreakdown
 */
final class PagesCheckoutSessionTotalDetailsResourceBreakdown extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'discounts',
        'taxes',
    ];

    /**
     * The aggregated discounts.
     */
    public \StripeSDK\Collections\Item\DiscountsCollection $discounts;
    /**
     * The aggregated tax amounts by rate.
     */
    public \StripeSDK\Collections\InvoicesResource\ShippingCost\TaxesCollection $taxes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->discounts = new \StripeSDK\Collections\Item\DiscountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\LineItems\DiscountAmount::class)) : parent::assignMember($name, $value),
            'taxes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->taxes = new \StripeSDK\Collections\InvoicesResource\ShippingCost\TaxesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\LineItems\TaxAmount::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
