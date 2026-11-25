<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\Restrictions;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\Restrictions\BrandsBlockedEnum> */
final class BrandsBlockedCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\Restrictions\BrandsBlockedEnum::class;
}
