<?php

declare(strict_types=1);

namespace StripeSDK\Enums\FundingInstructionsBankTransfer\FinancialAddress;

enum SupportedNetworksEnum: string
{
    case Ach = 'ach';
    case Bacs = 'bacs';
    case Chaps = 'chaps';
    case DomesticWireUs = 'domestic_wire_us';
    case Fps = 'fps';
    case Sepa = 'sepa';
    case Spei = 'spei';
    case Swift = 'swift';
    case Zengin = 'zengin';
}
