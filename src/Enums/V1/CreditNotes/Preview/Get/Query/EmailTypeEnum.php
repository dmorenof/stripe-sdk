<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\CreditNotes\Preview\Get\Query;

enum EmailTypeEnum: string
{
    case CreditNote = 'credit_note';
    case None = 'none';
}
