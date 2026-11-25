<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\AddInvoiceItemsItem;

/**
 * invoice_item_period
 */
final class ItemsItemPeriodRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end',
        'start',
    ];

    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\AddInvoiceItemsItem\Period\PeriodEndRequest $end;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\AddInvoiceItemsItem\Period\PeriodStartRequest $start;
}
