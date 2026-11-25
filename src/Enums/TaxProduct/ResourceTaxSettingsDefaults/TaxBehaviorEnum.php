<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\ResourceTaxSettingsDefaults;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
    case InferredByCurrency = 'inferred_by_currency';
}
