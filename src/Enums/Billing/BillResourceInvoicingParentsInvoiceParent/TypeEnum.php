<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\BillResourceInvoicingParentsInvoiceParent;

enum TypeEnum: string
{
    case QuoteDetails = 'quote_details';
    case SubscriptionDetails = 'subscription_details';
}
