<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsKonbiniDetailsResourceStore
 */
final class FlowsPrivatePaymentMethodsKonbiniDetailsResourceStore extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name of the convenience store chain where the payment was completed.
     */
    public ?\StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsKonbiniDetailsResourceStore\ChainEnum $chain;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'chain' => $value === null || is_string($value) ? $this->chain = $value === null ? null : \StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsKonbiniDetailsResourceStore\ChainEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
