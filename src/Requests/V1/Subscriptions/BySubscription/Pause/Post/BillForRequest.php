<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscription\Pause\Post;

/**
 * bill_for_param
 *
 * Controls what to bill for when pausing the subscription.
 */
final class BillForRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Subscriptions\BySubscription\Pause\Post\BillFor\UsageThroughRequest $outstanding_usage_through;
    public \StripeSDK\Requests\V1\Subscriptions\BySubscription\Pause\Post\BillFor\TimeFromRequest $unused_time_from;
}
