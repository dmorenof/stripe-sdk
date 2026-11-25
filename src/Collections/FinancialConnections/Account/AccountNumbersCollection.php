<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FinancialConnections\Account;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\BankConnectionsResource\AccountNumberDetails> */
final class AccountNumbersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\BankConnectionsResource\AccountNumberDetails::class;
}
