<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AmountDetailsRequest2Variant1;

/**
 * amount_details_param
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\AmountDetailsRequest2Variant1\DiscountAmountRequest $discount_amount;
    public bool $enforce_arithmetic_validation;
    public \StripeSDK\Requests\AmountDetailsRequest2Variant1\LineItemsRequest $line_items;
    public \StripeSDK\Requests\AmountDetailsRequest2Variant1\AmountDetailsRequest2Variant1ShippingRequest $shipping;
    public \StripeSDK\Requests\AmountDetailsRequest2Variant1\AmountDetailsRequest2Variant1TaxRequest $tax;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enforce_arithmetic_validation' => is_bool($value) ? $this->enforce_arithmetic_validation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
