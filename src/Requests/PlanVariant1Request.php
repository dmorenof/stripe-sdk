<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * installment_plan
 */
final class PlanVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public int $count;
    public \StripeSDK\Enums\InstallmentsPlanRequestVariant1\InstallmentsPlanRequestVariant1IntervalEnum $interval;
    public \StripeSDK\Enums\InstallmentsPlanRequestVariant1\InstallmentsPlanRequestVariant1TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\InstallmentsPlanRequestVariant1\InstallmentsPlanRequestVariant1IntervalEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\InstallmentsPlanRequestVariant1\InstallmentsPlanRequestVariant1TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
