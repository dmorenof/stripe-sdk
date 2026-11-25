<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\BillResourceInvoicingLinesParentsInvoiceLineItemParent;

enum TypeEnum: string
{
    case InvoiceItemDetails = 'invoice_item_details';
    case SubscriptionItemDetails = 'subscription_item_details';
}
