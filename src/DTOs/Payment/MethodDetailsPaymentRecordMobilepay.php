<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_mobilepay
 */
final class MethodDetailsPaymentRecordMobilepay extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Internal card details
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\MobilepayDetailsResourceCard $card;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value === null || $value instanceof \stdClass ? $this->card = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\MobilepayDetailsResourceCard($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
