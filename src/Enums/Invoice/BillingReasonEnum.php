<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoice;

enum BillingReasonEnum: string
{
    case AutomaticPendingInvoiceItemInvoice = 'automatic_pending_invoice_item_invoice';
    case Manual = 'manual';
    case QuoteAccept = 'quote_accept';
    case Subscription = 'subscription';
    case SubscriptionCreate = 'subscription_create';
    case SubscriptionCycle = 'subscription_cycle';
    case SubscriptionThreshold = 'subscription_threshold';
    case SubscriptionUpdate = 'subscription_update';
    case Upcoming = 'upcoming';
}
