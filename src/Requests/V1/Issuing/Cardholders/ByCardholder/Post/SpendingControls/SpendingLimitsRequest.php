<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls;

/**
 * spending_limits_param
 */
final class SpendingLimitsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'interval',
    ];

    public int $amount;
    public \StripeSDK\Collections\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls\SpendingLimitsItem\LimitsItemCategoriesCollection $categories;
    public \StripeSDK\Enums\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls\SpendingLimitsItem\LimitsItemIntervalEnum $interval;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls\SpendingLimitsItem\LimitsItemIntervalEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
