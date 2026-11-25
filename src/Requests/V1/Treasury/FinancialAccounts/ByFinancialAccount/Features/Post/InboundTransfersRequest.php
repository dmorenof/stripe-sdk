<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post;

/**
 * inbound_transfers
 *
 * Contains settings related to adding funds to a FinancialAccount from another Account with the same owner.
 */
final class InboundTransfersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\InboundTransfers\TransfersAchRequest $ach;
}
