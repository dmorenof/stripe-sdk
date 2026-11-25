<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccountsResourceTogglesSettingStatusDetails;

enum RestrictionEnum: string
{
    case InboundFlows = 'inbound_flows';
    case OutboundFlows = 'outbound_flows';
}
