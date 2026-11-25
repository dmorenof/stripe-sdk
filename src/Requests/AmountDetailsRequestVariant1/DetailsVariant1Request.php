<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AmountDetailsRequestVariant1;

/**
 * amount_details_param
 */
final class DetailsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\AmountDetailsRequestVariant1\DiscountAmountRequest $discount_amount;
    public bool $enforce_arithmetic_validation;
    public \StripeSDK\Requests\AmountDetailsRequestVariant1\LineItemsRequest $line_items;
    public \StripeSDK\Requests\AmountDetailsRequestVariant1\AmountDetailsRequestVariant1ShippingRequest $shipping;
    public \StripeSDK\Requests\AmountDetailsRequestVariant1\AmountDetailsRequestVariant1TaxRequest $tax;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enforce_arithmetic_validation' => is_bool($value) ? $this->enforce_arithmetic_validation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
