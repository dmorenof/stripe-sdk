<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Products\Post;

/**
 * price_data_without_product_with_metadata
 *
 * Data used to generate a new [Price](https://docs.stripe.com/api/prices) object. This Price will be set as the default price for this product.
 */
final class PriceDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
    ];

    /**
     * Format: currency
     */
    public string $currency;
    public \StripeSDK\Requests\V1\Products\Post\DefaultPriceData\OptionsMapRequest $currency_options;
    public \StripeSDK\Requests\V1\Products\Post\DefaultPriceData\UnitAmountRequest $custom_unit_amount;
    public \StripeSDK\Requests\V1\Products\Post\DefaultPriceData\MetadataMapRequest $metadata;
    public \StripeSDK\Requests\V1\Products\Post\DefaultPriceData\DataRecurringRequest $recurring;
    public \StripeSDK\Enums\V1\Products\Post\DefaultPriceData\TaxBehaviorEnum $tax_behavior;
    public int $unit_amount;
    /**
     * Format: decimal
     */
    public string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Products\Post\DefaultPriceData\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'unit_amount' => is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
