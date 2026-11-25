<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Portal\SubscriptionUpdate;

final class ProductsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Portal\SubscriptionUpdateProduct::class;
}
