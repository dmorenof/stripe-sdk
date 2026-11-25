<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingPricingPricing
 */
final class BillResourceInvoicingPricingPricing extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Billing\BillResourceInvoicingPricingPricingPriceDetails $price_details;
    /**
     * The type of the pricing details.
     */
    public \StripeSDK\Enums\Billing\BillResourceInvoicingPricingPricing\TypeEnum $type;
    /**
     * The unit amount (in the `currency` specified) of the item which contains a decimal value with at most 12 decimal places.
     * Format: decimal
     */
    public ?string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price_details' => $value instanceof \stdClass ? $this->price_details = new \StripeSDK\DTOs\Billing\BillResourceInvoicingPricingPricingPriceDetails($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Billing\BillResourceInvoicingPricingPricing\TypeEnum::from($value) : parent::assignMember($name, $value),
            'unit_amount_decimal' => $value === null || is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
