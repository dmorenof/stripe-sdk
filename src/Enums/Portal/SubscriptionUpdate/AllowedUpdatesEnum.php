<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Portal\SubscriptionUpdate;

enum AllowedUpdatesEnum: string
{
    case Price = 'price';
    case PromotionCode = 'promotion_code';
    case Quantity = 'quantity';
}
