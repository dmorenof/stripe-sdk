<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem;

/**
 * pause_schedule_create_resume_params
 */
final class SchedulesItemResumeRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'resume_at',
    ];

    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\ResumeAtRequest $resume_at;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\ResumeSettingsRequest $settings;
}
