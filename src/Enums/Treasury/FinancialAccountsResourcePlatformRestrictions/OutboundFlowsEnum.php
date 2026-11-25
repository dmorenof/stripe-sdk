<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccountsResourcePlatformRestrictions;

enum OutboundFlowsEnum: string
{
    case Restricted = 'restricted';
    case Unrestricted = 'unrestricted';
}
