<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * SubscriptionsResourceBillingModeFlexible
 */
final class BillingModeFlexible extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Controls how invoices and invoice items display proration amounts and discount amounts.
     */
    public \StripeSDK\Enums\SubscriptionsResource\BillingModeFlexible\ProrationDiscountsEnum $proration_discounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'proration_discounts' => is_string($value) ? $this->proration_discounts = \StripeSDK\Enums\SubscriptionsResource\BillingModeFlexible\ProrationDiscountsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
