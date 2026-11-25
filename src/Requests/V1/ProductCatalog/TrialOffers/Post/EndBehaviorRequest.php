<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ProductCatalog\TrialOffers\Post;

/**
 * trial_offer_end_behavior_param
 *
 * Define behavior that occurs at the end of the trial.
 */
final class EndBehaviorRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'transition',
    ];

    public \StripeSDK\Requests\V1\ProductCatalog\TrialOffers\Post\EndBehavior\BehaviorTransitionRequest $transition;
}
