<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Subscription\Item;

final class DiscountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Subscription\Item\DiscountsDTO::class;
}
