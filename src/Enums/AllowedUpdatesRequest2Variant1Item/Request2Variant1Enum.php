<?php

declare(strict_types=1);

namespace StripeSDK\Enums\AllowedUpdatesRequest2Variant1Item;

enum Request2Variant1Enum: string
{
    case Price = 'price';
    case PromotionCode = 'promotion_code';
    case Quantity = 'quantity';
}
