<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\ByInvoice\RemoveLines\Post\LinesItem;

enum LinesItemBehaviorEnum: string
{
    case Delete = 'delete';
    case Unassign = 'unassign';
}
