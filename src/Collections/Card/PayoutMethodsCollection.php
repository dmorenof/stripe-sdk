<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Card;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Card\PayoutMethodsEnum> */
final class PayoutMethodsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Card\PayoutMethodsEnum::class;
}
