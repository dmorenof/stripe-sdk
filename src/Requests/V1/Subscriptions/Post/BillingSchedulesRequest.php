<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post;

/**
 * billing_schedules_create_params
 */
final class BillingSchedulesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bill_until',
    ];

    protected const array VALIDATION = [
        'key' => [
            'maxLength' => 200,
        ],
    ];

    public \StripeSDK\Collections\V1\Subscriptions\Post\BillingSchedulesItem\AppliesToCollection $applies_to;
    public \StripeSDK\Requests\V1\Subscriptions\Post\BillingSchedulesItem\BillUntilRequest $bill_until;
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
