<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_konbini
 */
final class MethodDetailsPaymentRecordKonbini extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If the payment succeeded, this contains the details of the convenience store where the payment was completed.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\KonbiniDetailsResourceStore $store;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'store' => $value === null || $value instanceof \stdClass ? $this->store = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\KonbiniDetailsResourceStore($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
