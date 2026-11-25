<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Checkout\Session;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Payment\PagesCheckoutSessionDiscount> */
final class DiscountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Payment\PagesCheckoutSessionDiscount::class;
}
