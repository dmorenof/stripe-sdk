<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\InvoicePayments\Get\Query;

/**
 * payment_param
 */
final class QueryPaymentDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'payment_intent' => [
            'maxLength' => 5000,
        ],
        'payment_record' => [
            'maxLength' => 5000,
        ],
    ];

    public string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }
    public string $payment_record {
        set {
            $this->assigning('payment_record', $value);
            $this->payment_record = $value;
        }
    }
    public \StripeSDK\Enums\V1\InvoicePayments\Get\Query\Payment\PaymentTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_intent' => is_string($value) ? $this->payment_intent = $value : parent::assignMember($name, $value),
            'payment_record' => is_string($value) ? $this->payment_record = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\InvoicePayments\Get\Query\Payment\PaymentTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
