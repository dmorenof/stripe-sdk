<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\CreditNotes\Preview\Get\Query\RefundsItem;

/**
 * payment_record_refund_params
 */
final class RecordRefundDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_record',
        'refund_group',
    ];

    protected const array VALIDATION = [
        'payment_record' => [
            'maxLength' => 5000,
        ],
        'refund_group' => [
            'maxLength' => 5000,
        ],
    ];

    public string $payment_record {
        set {
            $this->assigning('payment_record', $value);
            $this->payment_record = $value;
        }
    }
    public string $refund_group {
        set {
            $this->assigning('refund_group', $value);
            $this->refund_group = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_record' => is_string($value) ? $this->payment_record = $value : parent::assignMember($name, $value),
            'refund_group' => is_string($value) ? $this->refund_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
