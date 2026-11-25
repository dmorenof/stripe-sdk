<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPaymentIntentAsyncWorkflowsResourceInputsResourceTax
 */
final class FlowsPaymentIntentAsyncWorkflowsResourceInputsResourceTax extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'calculation',
    ];

    protected const array VALIDATION = [
        'calculation' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The [TaxCalculation](https://docs.stripe.com/api/tax/calculations) id
     */
    public string $calculation {
        set {
            $this->assigning('calculation', $value);
            $this->calculation = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'calculation' => is_string($value) ? $this->calculation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
