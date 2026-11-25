<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FinancialConnections\Account;

final class AccountNumbersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\BankConnectionsResource\AccountNumberDetails::class;
}
