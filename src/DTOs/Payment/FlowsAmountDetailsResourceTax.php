<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsAmountDetailsResourceTax
 */
final class FlowsAmountDetailsResourceTax extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The total amount of tax on the transaction represented in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). Required for L2 rates. An integer greater than or equal to 0.
     *
     * This field is mutually exclusive with the `amount_details[line_items][#][tax][total_tax_amount]` field.
     */
    public ?int $total_tax_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'total_tax_amount' => $value === null || is_int($value) ? $this->total_tax_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
