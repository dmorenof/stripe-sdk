<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\Features;

/**
 * inbound_transfers
 */
final class InboundTransfersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\Features\InboundTransfers\TransfersAchRequest $ach;
}
