<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * PaymentsPrimitivesPaymentRecordsResourcePaymentMethodCardDetailsResourceInstallments
 */
final class CardDetailsResourceInstallments extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Installment plan selected for the payment.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceInstallmentPlan $plan;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'plan' => $value === null || $value instanceof \stdClass ? $this->plan = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceInstallmentPlan($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
