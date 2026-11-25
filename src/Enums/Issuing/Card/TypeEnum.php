<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Card;

enum TypeEnum: string
{
    case Physical = 'physical';
    case Virtual = 'virtual';
}
