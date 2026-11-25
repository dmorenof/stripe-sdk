<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TransformUsage
 */
final class TransformUsage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'divide_by',
        'round',
    ];

    /**
     * Divide usage by this number.
     */
    public int $divide_by;
    /**
     * After division, either round the result `up` or `down`.
     */
    public \StripeSDK\Enums\TransformUsage\RoundEnum $round;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'divide_by' => is_int($value) ? $this->divide_by = $value : parent::assignMember($name, $value),
            'round' => is_string($value) ? $this->round = \StripeSDK\Enums\TransformUsage\RoundEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
