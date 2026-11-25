<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post\SubscriptionData;

/**
 * trial_settings_config
 */
final class TrialSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_behavior',
    ];

    public \StripeSDK\Requests\V1\PaymentLinks\Post\SubscriptionData\TrialSettings\EndBehaviorRequest $end_behavior;
}
