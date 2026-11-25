<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConfirmationTokensResource;

/**
 * Installment
 *
 * Installment configuration for payments.
 */
final class PaymentMethodOptionsResourceCardResourceInstallment extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan $plan;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'plan' => $value instanceof \stdClass ? $this->plan = new \StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
