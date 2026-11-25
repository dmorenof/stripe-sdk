<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceBalanceAPIResourceCashBalance
 */
final class BalanceApiResourceCashBalance extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The funds available to the account holder. Typically this is the current balance after subtracting any outbound pending transactions and adding any inbound pending transactions.
     *
     * Each key is a three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase.
     *
     * Each value is a integer amount. A positive amount indicates money owed to the account holder. A negative amount indicates money owed by the account holder.
     */
    public ?\StripeSDK\DTOs\BankConnectionsResource\BalanceApiResourceCashBalance\AvailableMap $available;
}
