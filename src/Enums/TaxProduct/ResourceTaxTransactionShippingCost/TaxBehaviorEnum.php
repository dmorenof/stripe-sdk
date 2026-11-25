<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\ResourceTaxTransactionShippingCost;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
}
