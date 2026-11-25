<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Balance\Transaction;

final class FeeDetailsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Fee::class;
}
