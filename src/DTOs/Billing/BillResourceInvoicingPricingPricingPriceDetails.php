<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingPricingPricingPriceDetails
 */
final class BillResourceInvoicingPricingPricingPriceDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'price',
        'product',
    ];

    protected const array VALIDATION = [
        'product' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the price this item is associated with.
     */
    public \StripeSDK\DTOs\Billing\BillResourceInvoicingPricingPricingPriceDetails\PriceDTO $price;
    /**
     * The ID of the product this item is associated with.
     */
    public string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'product' => is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
