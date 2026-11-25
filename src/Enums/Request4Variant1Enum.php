<?php

declare(strict_types=1);

namespace StripeSDK\Enums;

enum Request4Variant1Enum: string
{
    case Price = 'price';
    case PromotionCode = 'promotion_code';
    case Quantity = 'quantity';
}
