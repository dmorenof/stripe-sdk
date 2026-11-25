<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\CreditNotes\Preview\Lines\Get\Query\LinesItem;

enum LinesItemTypeEnum: string
{
    case CustomLineItem = 'custom_line_item';
    case InvoiceLineItem = 'invoice_line_item';
}
