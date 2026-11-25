<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsAmountDetails
 */
final class FlowsAmountDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The total discount applied on the transaction represented in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). An integer greater than 0.
     *
     * This field is mutually exclusive with the `amount_details[line_items][#][discount_amount]` field.
     */
    public int $discount_amount;
    public \StripeSDK\DTOs\Payment\FlowsAmountDetailsResourceError $error;
    /**
     * A list of line items, each containing information about a product in the PaymentIntent. There is a maximum of 200 line items.
     */
    public \StripeSDK\DTOs\Payment\FlowsAmountDetails\LineItemsDTO $line_items;
    public \StripeSDK\DTOs\Payment\FlowsAmountDetailsResourceShipping $shipping;
    public \StripeSDK\DTOs\Payment\FlowsAmountDetailsResourceTax $tax;
    public \StripeSDK\DTOs\Payment\FlowsAmountDetailsClientResourceTip $tip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discount_amount' => is_int($value) ? $this->discount_amount = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \StripeSDK\DTOs\Payment\FlowsAmountDetailsResourceError($value) : parent::assignMember($name, $value),
            'shipping' => $value instanceof \stdClass ? $this->shipping = new \StripeSDK\DTOs\Payment\FlowsAmountDetailsResourceShipping($value) : parent::assignMember($name, $value),
            'tax' => $value instanceof \stdClass ? $this->tax = new \StripeSDK\DTOs\Payment\FlowsAmountDetailsResourceTax($value) : parent::assignMember($name, $value),
            'tip' => $value instanceof \stdClass ? $this->tip = new \StripeSDK\DTOs\Payment\FlowsAmountDetailsClientResourceTip($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
