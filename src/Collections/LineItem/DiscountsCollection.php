<?php

declare(strict_types=1);

namespace StripeSDK\Collections\LineItem;

final class DiscountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\LineItem\DiscountsDTO::class;
}
