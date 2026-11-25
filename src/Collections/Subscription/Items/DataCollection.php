<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Subscription\Items;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Subscription\Item> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Subscription\Item::class;
}
