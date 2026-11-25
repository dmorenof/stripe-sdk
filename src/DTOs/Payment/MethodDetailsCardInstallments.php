<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_card_installments
 */
final class MethodDetailsCardInstallments extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Installment plan selected for the payment.
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan $plan;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'plan' => $value === null || $value instanceof \stdClass ? $this->plan = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
