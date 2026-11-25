<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ProductCatalog\TrialOffers\Post\Duration;

/**
 * trial_offer_duration_relative_param
 */
final class DurationRelativeRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'iterations',
    ];

    public int $iterations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'iterations' => is_int($value) ? $this->iterations = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
