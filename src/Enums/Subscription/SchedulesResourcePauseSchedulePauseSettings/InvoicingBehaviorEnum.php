<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulesResourcePauseSchedulePauseSettings;

enum InvoicingBehaviorEnum: string
{
    case Invoice = 'invoice';
    case PendingInvoiceItem = 'pending_invoice_item';
}
