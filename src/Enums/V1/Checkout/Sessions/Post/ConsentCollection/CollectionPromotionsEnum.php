<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\ConsentCollection;

enum CollectionPromotionsEnum: string
{
    case Auto = 'auto';
    case None = 'none';
}
