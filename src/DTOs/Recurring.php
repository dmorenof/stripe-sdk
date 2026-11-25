<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Recurring
 */
final class Recurring extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'interval',
        'interval_count',
        'usage_type',
    ];

    protected const array VALIDATION = [
        'meter' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The frequency at which a subscription is billed. One of `day`, `week`, `month` or `year`.
     */
    public \StripeSDK\Enums\Recurring\IntervalEnum $interval;
    /**
     * The number of intervals (specified in the `interval` attribute) between subscription billings. For example, `interval=month` and `interval_count=3` bills every 3 months.
     */
    public int $interval_count;
    /**
     * The meter tracking the usage of a metered price
     */
    public ?string $meter {
        set {
            $this->assigning('meter', $value);
            $this->meter = $value;
        }
    }
    /**
     * Configures how the quantity per period should be determined. Can be either `metered` or `licensed`. `licensed` automatically bills the `quantity` set when adding it to a subscription. `metered` aggregates the total usage based on usage records. Defaults to `licensed`.
     */
    public \StripeSDK\Enums\Recurring\UsageTypeEnum $usage_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\Recurring\IntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            'meter' => $value === null || is_string($value) ? $this->meter = $value : parent::assignMember($name, $value),
            'usage_type' => is_string($value) ? $this->usage_type = \StripeSDK\Enums\Recurring\UsageTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
