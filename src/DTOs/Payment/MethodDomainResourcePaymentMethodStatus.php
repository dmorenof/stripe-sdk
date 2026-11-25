<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentMethodStatus
 *
 * Indicates the status of a specific payment method on a payment method domain.
 */
final class MethodDomainResourcePaymentMethodStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * The status of the payment method on the domain.
     */
    public \StripeSDK\Enums\Payment\MethodDomainResourcePaymentMethodStatus\StatusEnum $status;
    public \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatusDetails $status_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Payment\MethodDomainResourcePaymentMethodStatus\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_details' => $value instanceof \stdClass ? $this->status_details = new \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatusDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
