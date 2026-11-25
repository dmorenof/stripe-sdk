<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * NotificationEventRequest
 */
final class NotificationEventRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'idempotency_key' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID of the API request that caused the event. If null, the event was automatic (e.g., Stripe's automatic subscription handling). Request logs are available in the [dashboard](https://dashboard.stripe.com/logs), but currently not in the API.
     */
    public ?string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The idempotency key transmitted during the request, if any. *Note: This property is populated only for events on or after May 23, 2017*.
     */
    public ?string $idempotency_key {
        set {
            $this->assigning('idempotency_key', $value);
            $this->idempotency_key = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => $value === null || is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'idempotency_key' => $value === null || is_string($value) ? $this->idempotency_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
