<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings;

enum InvoicingBehaviorEnum: string
{
    case Invoice = 'invoice';
    case PendingInvoiceItem = 'pending_invoice_item';
}
