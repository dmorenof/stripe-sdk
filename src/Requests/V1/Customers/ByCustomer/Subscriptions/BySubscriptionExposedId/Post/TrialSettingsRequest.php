<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post;

/**
 * trial_settings_config
 *
 * Settings related to subscription trials.
 */
final class TrialSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_behavior',
    ];

    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post\TrialSettings\EndBehaviorRequest $end_behavior;
}
