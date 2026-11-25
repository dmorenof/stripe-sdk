<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Sources\BySource\Post\SourceOrder\ItemsItem;

enum ItemsItemTypeEnum: string
{
    case Discount = 'discount';
    case Shipping = 'shipping';
    case Sku = 'sku';
    case Tax = 'tax';
}
