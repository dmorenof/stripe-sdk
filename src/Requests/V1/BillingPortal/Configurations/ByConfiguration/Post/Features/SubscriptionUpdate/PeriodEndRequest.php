<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate;

/**
 * schedule_update_at_period_end_updating_param
 */
final class PeriodEndRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\ScheduleAtPeriodEnd\EndConditionsRequest $conditions;
}
