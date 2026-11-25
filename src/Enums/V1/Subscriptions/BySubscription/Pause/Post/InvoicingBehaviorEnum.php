<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\BySubscription\Pause\Post;

enum InvoicingBehaviorEnum: string
{
    case Invoice = 'invoice';
    case PendingInvoiceItem = 'pending_invoice_item';
}
