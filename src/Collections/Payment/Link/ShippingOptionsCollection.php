<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Payment\Link;

final class ShippingOptionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Payment\LinksResourceShippingOption::class;
}
