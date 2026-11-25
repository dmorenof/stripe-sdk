<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccountsResourcePlatformRestrictions;

enum InboundFlowsEnum: string
{
    case Restricted = 'restricted';
    case Unrestricted = 'unrestricted';
}
