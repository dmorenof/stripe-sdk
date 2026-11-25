<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause;

/**
 * bill_for_param
 */
final class BillForRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\BillFor\UsageThroughRequest $outstanding_usage_through;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\BillFor\TimeFromRequest $unused_time_from;
}
