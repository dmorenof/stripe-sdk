<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Source\Order;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Source\OrderItem> */
final class ItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Source\OrderItem::class;
}
