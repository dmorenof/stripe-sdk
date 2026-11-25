<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Prices\Post\TransformQuantity;

enum QuantityRoundEnum: string
{
    case Down = 'down';
    case Up = 'up';
}
