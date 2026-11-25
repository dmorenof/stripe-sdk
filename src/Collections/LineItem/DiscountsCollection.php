<?php

declare(strict_types=1);

namespace StripeSDK\Collections\LineItem;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\LineItem\DiscountsDTO> */
final class DiscountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\LineItem\DiscountsDTO::class;
}
