<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\BillFor;

/**
 * outstanding_usage_through_param
 */
final class UsageThroughRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\BillFor\OutstandingUsageThrough\ThroughTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\BillFor\OutstandingUsageThrough\ThroughTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
