<?php

declare(strict_types=1);

namespace StripeSDK\Collections\BankAccount;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\BankAccount\PayoutMethodsEnum> */
final class PayoutMethodsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\BankAccount\PayoutMethodsEnum::class;
}
