<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice\Lines;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\LineItem> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\LineItem::class;
}
