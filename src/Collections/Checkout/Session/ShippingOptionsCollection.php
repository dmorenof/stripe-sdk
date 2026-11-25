<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Checkout\Session;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Payment\PagesCheckoutSessionShippingOption> */
final class ShippingOptionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Payment\PagesCheckoutSessionShippingOption::class;
}
