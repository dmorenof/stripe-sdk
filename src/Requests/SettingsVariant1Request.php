<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * trial_settings_config
 */
final class SettingsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_behavior',
    ];

    public \StripeSDK\Requests\TrialSettingsRequestVariant1\EndBehaviorRequest $end_behavior;
}
