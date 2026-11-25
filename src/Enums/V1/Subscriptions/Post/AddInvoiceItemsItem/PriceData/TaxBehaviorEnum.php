<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\Post\AddInvoiceItemsItem\PriceData;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
    case Unspecified = 'unspecified';
}
