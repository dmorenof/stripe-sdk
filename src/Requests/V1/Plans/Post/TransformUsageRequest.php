<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Plans\Post;

/**
 * transform_usage_param
 *
 * Apply a transformation to the reported usage or set quantity before computing the billed price. Cannot be combined with `tiers`.
 */
final class TransformUsageRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'divide_by',
        'round',
    ];

    public int $divide_by;
    public \StripeSDK\Enums\V1\Plans\Post\TransformUsage\UsageRoundEnum $round;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'divide_by' => is_int($value) ? $this->divide_by = $value : parent::assignMember($name, $value),
            'round' => is_string($value) ? $this->round = \StripeSDK\Enums\V1\Plans\Post\TransformUsage\UsageRoundEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
