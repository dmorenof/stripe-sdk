<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * PaymentsPrimitivesPaymentRecordsResourcePaymentMethodKlarnaDetailsResourcePayerDetails
 */
final class KlarnaDetailsResourcePayerDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The payer's address
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\KlarnaDetailsResourcePayerDetailsResourcePayerDetailsAddress $address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value === null || $value instanceof \stdClass ? $this->address = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\KlarnaDetailsResourcePayerDetailsResourcePayerDetailsAddress($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
