<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Payment\Link;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Payment\LinksResourceOptionalItem> */
final class OptionalItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Payment\LinksResourceOptionalItem::class;
}
