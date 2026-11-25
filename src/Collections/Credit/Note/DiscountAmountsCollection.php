<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Credit\Note;

final class DiscountAmountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\DiscountsResourceDiscountAmount::class;
}
