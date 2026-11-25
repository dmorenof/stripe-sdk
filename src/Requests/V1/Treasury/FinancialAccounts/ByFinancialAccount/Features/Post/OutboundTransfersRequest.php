<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post;

/**
 * outbound_transfers
 *
 * Contains a Feature and settings related to moving money out of the FinancialAccount into another Account with the same owner.
 */
final class OutboundTransfersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\OutboundTransfers\TransfersAchRequest $ach;
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\OutboundTransfers\DomesticWireRequest $us_domestic_wire;
}
