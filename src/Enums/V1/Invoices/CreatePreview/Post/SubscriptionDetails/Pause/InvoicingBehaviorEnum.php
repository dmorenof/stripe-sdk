<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause;

enum InvoicingBehaviorEnum: string
{
    case Invoice = 'invoice';
    case PendingInvoiceItem = 'pending_invoice_item';
}
