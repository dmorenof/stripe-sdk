<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Balance;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Balance\Amount> */
final class AvailableCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Balance\Amount::class;
}
