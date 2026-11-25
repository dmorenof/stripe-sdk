<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Item;

final class DiscountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\LineItems\DiscountAmount::class;
}
