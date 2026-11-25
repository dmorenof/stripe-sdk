<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings;

/**
 * pause_settings_bill_for_params
 */
final class BillForRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings\BillFor\UsageThroughRequest $outstanding_usage_through;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings\BillFor\TimeFromRequest $unused_time_from;
}
