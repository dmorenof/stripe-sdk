<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Source\Order;

final class ItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Source\OrderItem::class;
}
