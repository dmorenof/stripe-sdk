<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_konbini
 */
final class MethodDetailsKonbini extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If the payment succeeded, this contains the details of the convenience store where the payment was completed.
     */
    public ?\StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsKonbiniDetailsResourceStore $store;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'store' => $value === null || $value instanceof \stdClass ? $this->store = $value === null ? null : new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsKonbiniDetailsResourceStore($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
