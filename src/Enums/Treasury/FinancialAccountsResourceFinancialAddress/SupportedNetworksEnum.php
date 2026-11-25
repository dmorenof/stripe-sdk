<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccountsResourceFinancialAddress;

enum SupportedNetworksEnum: string
{
    case Ach = 'ach';
    case Rtp = 'rtp';
    case UsDomesticWire = 'us_domestic_wire';
}
