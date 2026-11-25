<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Credit\NoteLineItem;

enum TypeEnum: string
{
    case CustomLineItem = 'custom_line_item';
    case InvoiceLineItem = 'invoice_line_item';
}
