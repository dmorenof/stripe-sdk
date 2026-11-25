<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Payment\Link;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Payment\LinksResourceShippingOption> */
final class ShippingOptionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Payment\LinksResourceShippingOption::class;
}
