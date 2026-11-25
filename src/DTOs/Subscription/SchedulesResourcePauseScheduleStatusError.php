<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourcePauseScheduleStatusError
 */
final class SchedulesResourcePauseScheduleStatusError extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    protected const array VALIDATION = [
        'code' => [
            'maxLength' => 5000,
        ],
        'message' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A machine-readable error code.
     */
    public string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
    /**
     * A description of the error.
     */
    public string $message {
        set {
            $this->assigning('message', $value);
            $this->message = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
