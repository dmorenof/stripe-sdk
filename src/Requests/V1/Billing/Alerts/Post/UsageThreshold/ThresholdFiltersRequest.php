<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\Alerts\Post\UsageThreshold;

/**
 * usage_alert_filter
 */
final class ThresholdFiltersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
    ];

    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public \StripeSDK\Enums\V1\Billing\Alerts\Post\UsageThreshold\FiltersItem\FiltersItemTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Billing\Alerts\Post\UsageThreshold\FiltersItem\FiltersItemTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
