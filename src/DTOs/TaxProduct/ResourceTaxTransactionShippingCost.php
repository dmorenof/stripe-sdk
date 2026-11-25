<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxTransactionShippingCost
 */
final class ResourceTaxTransactionShippingCost extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_tax',
        'tax_behavior',
        'tax_code',
    ];

    protected const array VALIDATION = [
        'shipping_rate' => [
            'maxLength' => 5000,
        ],
        'tax_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The shipping amount in the [smallest currency unit](https://docs.stripe.com/currencies#minor-units). If `tax_behavior=inclusive`, then this amount includes taxes. Otherwise, taxes were calculated on top of this amount.
     */
    public int $amount;
    /**
     * The amount of tax calculated for shipping, in the [smallest currency unit](https://docs.stripe.com/currencies#minor-units).
     */
    public int $amount_tax;
    /**
     * The ID of an existing [ShippingRate](https://docs.stripe.com/api/shipping_rates/object).
     */
    public string $shipping_rate {
        set {
            $this->assigning('shipping_rate', $value);
            $this->shipping_rate = $value;
        }
    }
    /**
     * Specifies whether the `amount` includes taxes. If `tax_behavior=inclusive`, then the amount includes taxes.
     */
    public \StripeSDK\Enums\TaxProduct\ResourceTaxTransactionShippingCost\TaxBehaviorEnum $tax_behavior;
    /**
     * The [tax code](https://docs.stripe.com/tax/tax-categories) ID used for shipping.
     */
    public string $tax_code {
        set {
            $this->assigning('tax_code', $value);
            $this->tax_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_tax' => is_int($value) ? $this->amount_tax = $value : parent::assignMember($name, $value),
            'shipping_rate' => is_string($value) ? $this->shipping_rate = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\TaxProduct\ResourceTaxTransactionShippingCost\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tax_code' => is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
