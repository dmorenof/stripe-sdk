<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Hr\Standard;

enum SupplySchemeEnum: string
{
    case InboundGoods = 'inbound_goods';
    case SmallSeller = 'small_seller';
    case Standard = 'standard';
}
