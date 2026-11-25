<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\Meters\Post;

/**
 * aggregation_settings_param
 *
 * The default settings to aggregate a meter's events with.
 */
final class DefaultAggregationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'formula',
    ];

    public \StripeSDK\Enums\V1\Billing\Meters\Post\DefaultAggregation\AggregationFormulaEnum $formula;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'formula' => is_string($value) ? $this->formula = \StripeSDK\Enums\V1\Billing\Meters\Post\DefaultAggregation\AggregationFormulaEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
