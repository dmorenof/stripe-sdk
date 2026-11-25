<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Card;

final class PayoutMethodsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Card\PayoutMethodsEnum::class;
}
