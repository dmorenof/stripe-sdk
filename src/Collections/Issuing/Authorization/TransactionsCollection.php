<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\Authorization;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Issuing\Transaction> */
final class TransactionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Issuing\Transaction::class;
}
