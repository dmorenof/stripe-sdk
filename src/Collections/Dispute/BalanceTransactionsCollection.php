<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Dispute;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Balance\Transaction> */
final class BalanceTransactionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Balance\Transaction::class;
}
