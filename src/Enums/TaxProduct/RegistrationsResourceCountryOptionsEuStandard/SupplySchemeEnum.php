<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsEuStandard;

enum SupplySchemeEnum: string
{
    case InboundGoods = 'inbound_goods';
    case SmallSeller = 'small_seller';
    case Standard = 'standard';
}
