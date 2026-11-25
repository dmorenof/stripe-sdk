<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Tax\TransactionLineItem;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
}
