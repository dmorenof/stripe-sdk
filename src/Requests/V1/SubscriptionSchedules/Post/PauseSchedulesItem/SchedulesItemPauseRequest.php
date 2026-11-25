<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem;

/**
 * pause_schedule_create_pause_params
 */
final class SchedulesItemPauseRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'pause_at',
    ];

    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\PauseAtRequest $pause_at;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\PauseSettingsRequest $settings;
}
