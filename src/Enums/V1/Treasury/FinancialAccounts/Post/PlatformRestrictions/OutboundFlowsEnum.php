<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\FinancialAccounts\Post\PlatformRestrictions;

enum OutboundFlowsEnum: string
{
    case Restricted = 'restricted';
    case Unrestricted = 'unrestricted';
}
