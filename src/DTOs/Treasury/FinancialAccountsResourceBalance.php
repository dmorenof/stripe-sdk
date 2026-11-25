<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * BalanceResource
 *
 * Balance information for the FinancialAccount
 */
final class FinancialAccountsResourceBalance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cash',
        'inbound_pending',
        'outbound_pending',
    ];

    /**
     * Funds the user can spend right now.
     */
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceBalance\CashMap $cash;
    /**
     * Funds not spendable yet, but will become available at a later time.
     */
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceBalance\InboundPendingMap $inbound_pending;
    /**
     * Funds in the account, but not spendable because they are being held for pending outbound flows.
     */
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceBalance\OutboundPendingMap $outbound_pending;
}
