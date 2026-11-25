<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\SubscriptionUpdate;

/**
 * schedule_update_at_period_end_creating_param
 */
final class PeriodEndRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\BillingPortal\Configurations\Post\Features\SubscriptionUpdate\ScheduleAtPeriodEnd\EndConditionsCollection $conditions;
}
