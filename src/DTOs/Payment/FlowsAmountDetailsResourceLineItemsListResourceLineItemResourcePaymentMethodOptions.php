<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsAmountDetailsResourceLineItemsListResourceLineItemResourcePaymentMethodOptions
 */
final class FlowsAmountDetailsResourceLineItemsListResourceLineItemResourcePaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardPaymentIntentAmountDetailsLineItemPaymentMethodOptions $card;
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardPresentAmountDetailsLineItemPaymentMethodOptions $card_present;
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsKlarnaPaymentIntentAmountDetailsLineItemPaymentMethodOptions $klarna;
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsPaypalAmountDetailsLineItemPaymentMethodOptions $paypal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardPaymentIntentAmountDetailsLineItemPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'card_present' => $value instanceof \stdClass ? $this->card_present = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsCardPresentAmountDetailsLineItemPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'klarna' => $value instanceof \stdClass ? $this->klarna = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsKlarnaPaymentIntentAmountDetailsLineItemPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'paypal' => $value instanceof \stdClass ? $this->paypal = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsPaypalAmountDetailsLineItemPaymentMethodOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
