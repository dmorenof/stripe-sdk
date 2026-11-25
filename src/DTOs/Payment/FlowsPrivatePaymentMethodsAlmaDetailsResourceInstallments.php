<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsAlmaDetailsResourceInstallments
 */
final class FlowsPrivatePaymentMethodsAlmaDetailsResourceInstallments extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'count',
    ];

    /**
     * The number of installments.
     */
    public int $count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
