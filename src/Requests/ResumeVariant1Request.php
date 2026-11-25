<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * pause_schedule_update_resume_params
 */
final class ResumeVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\ResumeAtRequest $resume_at;
    public \StripeSDK\Requests\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\PauseSchedulesRequestVariant1ItemResumeRequestVariant1SettingsRequest $settings;
}
