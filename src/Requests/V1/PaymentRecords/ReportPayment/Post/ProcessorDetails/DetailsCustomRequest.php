<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post\ProcessorDetails;

/**
 * custom
 */
final class DetailsCustomRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_reference',
    ];

    protected const array VALIDATION = [
        'payment_reference' => [
            'maxLength' => 5000,
        ],
    ];

    public string $payment_reference {
        set {
            $this->assigning('payment_reference', $value);
            $this->payment_reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_reference' => is_string($value) ? $this->payment_reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
