<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings;

enum InvoicingBehaviorEnum: string
{
    case Invoice = 'invoice';
    case PendingInvoiceItem = 'pending_invoice_item';
}
