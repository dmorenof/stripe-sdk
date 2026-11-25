<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ProductCatalog\TrialOffers\Post;

/**
 * trial_offer_duration_param
 *
 * Duration of one service period of the trial.
 */
final class TrialOffersDurationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\ProductCatalog\TrialOffers\Post\Duration\DurationRelativeRequest $relative;
    public \StripeSDK\Enums\V1\ProductCatalog\TrialOffers\Post\Duration\DurationTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\ProductCatalog\TrialOffers\Post\Duration\DurationTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
