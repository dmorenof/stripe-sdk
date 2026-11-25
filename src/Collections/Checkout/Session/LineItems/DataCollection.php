<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Checkout\Session\LineItems;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Item> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Item::class;
}
