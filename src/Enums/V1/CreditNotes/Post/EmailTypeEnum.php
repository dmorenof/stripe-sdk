<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\CreditNotes\Post;

enum EmailTypeEnum: string
{
    case CreditNote = 'credit_note';
    case None = 'none';
}
