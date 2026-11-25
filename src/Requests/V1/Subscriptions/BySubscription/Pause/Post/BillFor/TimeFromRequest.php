<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscription\Pause\Post\BillFor;

/**
 * unused_time_from_param
 */
final class TimeFromRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Enums\V1\Subscriptions\BySubscription\Pause\Post\BillFor\UnusedTimeFrom\FromTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Subscriptions\BySubscription\Pause\Post\BillFor\UnusedTimeFrom\FromTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
