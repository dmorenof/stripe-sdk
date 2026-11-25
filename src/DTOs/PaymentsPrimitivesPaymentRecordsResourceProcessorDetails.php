<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Processor Detail
 *
 * Processor information associated with this payment.
 */
final class PaymentsPrimitivesPaymentRecordsResourceProcessorDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceProcessorDetailsResourceCustomDetails $custom;
    /**
     * The processor used for this payment attempt.
     */
    public \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourceProcessorDetails\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom' => $value instanceof \stdClass ? $this->custom = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceProcessorDetailsResourceCustomDetails($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourceProcessorDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
