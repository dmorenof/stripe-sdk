<?php

declare(strict_types=1);

namespace StripeSDK\Collections\PaypalSellerProtection;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\PaypalSellerProtection\DisputeCategoriesEnum> */
final class DisputeCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\PaypalSellerProtection\DisputeCategoriesEnum::class;
}
