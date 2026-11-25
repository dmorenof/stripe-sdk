<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post\AddInvoiceItemsItem;

/**
 * invoice_item_period
 */
final class ItemsItemPeriodRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end',
        'start',
    ];

    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post\AddInvoiceItemsItem\Period\PeriodEndRequest $end;
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post\AddInvoiceItemsItem\Period\PeriodStartRequest $start;
}
