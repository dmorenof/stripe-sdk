<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InvoicingRule;

enum TypeEnum: string
{
    case DeferUntilCreditedItemsResolved = 'defer_until_credited_items_resolved';
}
