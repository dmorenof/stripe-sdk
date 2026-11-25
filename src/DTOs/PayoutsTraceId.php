<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * PayoutsTraceID
 */
final class PayoutsTraceId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    protected const array VALIDATION = [
        'status' => [
            'maxLength' => 5000,
        ],
        'value' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Possible values are `pending`, `supported`, and `unsupported`. When `payout.status` is `pending` or `in_transit`, this will be `pending`. When the payout transitions to `paid`, `failed`, or `canceled`, this status will become `supported` or `unsupported` shortly after in most cases. In some cases, this may appear as `pending` for up to 10 days after `arrival_date` until transitioning to `supported` or `unsupported`.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * The trace ID value if `trace_id.status` is `supported`, otherwise `nil`.
     */
    public ?string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'value' => $value === null || is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
