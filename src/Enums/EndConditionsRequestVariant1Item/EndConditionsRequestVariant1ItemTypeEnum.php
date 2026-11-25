<?php

declare(strict_types=1);

namespace StripeSDK\Enums\EndConditionsRequestVariant1Item;

enum EndConditionsRequestVariant1ItemTypeEnum: string
{
    case DecreasingItemAmount = 'decreasing_item_amount';
    case ShorteningInterval = 'shortening_interval';
}
