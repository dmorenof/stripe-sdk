<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoice\ItemProrationCreditedItems;

enum TypeEnum: string
{
    case InvoiceItem = 'invoice_item';
    case InvoiceLineItems = 'invoice_line_items';
}
