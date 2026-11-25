<?php

declare(strict_types=1);

namespace StripeSDK\Collections\BankAccount;

final class PayoutMethodsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\BankAccount\PayoutMethodsEnum::class;
}
