<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PauseSchedulesRequestVariant1Item;

/**
 * pause_schedule_update_pause_params
 */
final class PauseSchedulesRequestVariant1ItemPauseRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\PauseSchedulesRequestVariant1Item\Pause\PauseAtRequest $pause_at;
    public \StripeSDK\Requests\PauseSchedulesRequestVariant1Item\Pause\PauseSettingsRequest $settings;
}
