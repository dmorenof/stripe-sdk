<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsAmountDetailsResourceLineItemsListResourceLineItemResourceTax
 */
final class FlowsAmountDetailsResourceLineItemsListResourceLineItemResourceTax extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'total_tax_amount',
    ];

    /**
     * The total amount of tax on a single line item represented in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). Required for L3 rates. An integer greater than or equal to 0.
     *
     * This field is mutually exclusive with the `amount_details[tax][total_tax_amount]` field.
     */
    public int $total_tax_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'total_tax_amount' => is_int($value) ? $this->total_tax_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
