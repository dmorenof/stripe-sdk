<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPaymentIntentAsyncWorkflows
 */
final class FlowsPaymentIntentAsyncWorkflows extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\FlowsPaymentIntentAsyncWorkflowsResourceInputs $inputs;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inputs' => $value instanceof \stdClass ? $this->inputs = new \StripeSDK\DTOs\Payment\FlowsPaymentIntentAsyncWorkflowsResourceInputs($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
