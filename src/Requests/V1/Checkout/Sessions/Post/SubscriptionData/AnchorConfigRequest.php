<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData;

/**
 * cycle_anchor_config_param
 */
final class AnchorConfigRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'day_of_month',
    ];

    public int $day_of_month;
    public int $hour;
    public int $minute;
    public int $month;
    public int $second;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'day_of_month' => is_int($value) ? $this->day_of_month = $value : parent::assignMember($name, $value),
            'hour' => is_int($value) ? $this->hour = $value : parent::assignMember($name, $value),
            'minute' => is_int($value) ? $this->minute = $value : parent::assignMember($name, $value),
            'month' => is_int($value) ? $this->month = $value : parent::assignMember($name, $value),
            'second' => is_int($value) ? $this->second = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
