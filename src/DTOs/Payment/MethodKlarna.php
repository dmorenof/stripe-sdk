<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_klarna
 */
final class MethodKlarna extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The customer's date of birth, if provided.
     */
    public ?\StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsKlarnaDob $dob;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dob' => $value === null || $value instanceof \stdClass ? $this->dob = $value === null ? null : new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsKlarnaDob($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
