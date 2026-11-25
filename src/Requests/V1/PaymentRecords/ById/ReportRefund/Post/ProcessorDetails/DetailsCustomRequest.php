<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportRefund\Post\ProcessorDetails;

/**
 * custom
 */
final class DetailsCustomRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'refund_reference',
    ];

    protected const array VALIDATION = [
        'refund_reference' => [
            'maxLength' => 5000,
        ],
    ];

    public string $refund_reference {
        set {
            $this->assigning('refund_reference', $value);
            $this->refund_reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'refund_reference' => is_string($value) ? $this->refund_reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
