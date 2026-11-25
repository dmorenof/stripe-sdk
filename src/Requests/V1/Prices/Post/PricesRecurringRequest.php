<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Prices\Post;

/**
 * recurring
 *
 * The recurring components of a price such as `interval` and `usage_type`.
 */
final class PricesRecurringRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'interval',
    ];

    protected const array VALIDATION = [
        'meter' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\Prices\Post\Recurring\RecurringIntervalEnum $interval;
    public int $interval_count;
    public string $meter {
        set {
            $this->assigning('meter', $value);
            $this->meter = $value;
        }
    }
    public \StripeSDK\Enums\V1\Prices\Post\Recurring\UsageTypeEnum $usage_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\Prices\Post\Recurring\RecurringIntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            'meter' => is_string($value) ? $this->meter = $value : parent::assignMember($name, $value),
            'usage_type' => is_string($value) ? $this->usage_type = \StripeSDK\Enums\V1\Prices\Post\Recurring\UsageTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
