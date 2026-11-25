<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentMethodStatusDetail
 *
 * Contains additional details about the status of a payment method for a specific payment method domain.
 */
final class MethodDomainResourcePaymentMethodStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'error_message',
    ];

    protected const array VALIDATION = [
        'error_message' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The error message associated with the status of the payment method on the domain.
     */
    public string $error_message {
        set {
            $this->assigning('error_message', $value);
            $this->error_message = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error_message' => is_string($value) ? $this->error_message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
