<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPaymentIntentAsyncWorkflowsResourceInputs
 */
final class FlowsPaymentIntentAsyncWorkflowsResourceInputs extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\FlowsPaymentIntentAsyncWorkflowsResourceInputsResourceTax $tax;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tax' => $value instanceof \stdClass ? $this->tax = new \StripeSDK\DTOs\Payment\FlowsPaymentIntentAsyncWorkflowsResourceInputsResourceTax($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
