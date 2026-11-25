<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FinancialConnections\Session\Accounts;

final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\FinancialConnections\Account::class;
}
