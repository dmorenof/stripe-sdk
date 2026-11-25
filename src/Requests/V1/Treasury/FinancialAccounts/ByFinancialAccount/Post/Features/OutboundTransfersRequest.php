<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features;

/**
 * outbound_transfers
 */
final class OutboundTransfersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\OutboundTransfers\TransfersAchRequest $ach;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\OutboundTransfers\DomesticWireRequest $us_domestic_wire;
}
