<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\TransactionEntries\Get\Query;

enum OrderByEnum: string
{
    case Created = 'created';
    case EffectiveAt = 'effective_at';
}
