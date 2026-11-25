<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\PaymentLinks\Post\PaymentMethodOptions\Card\Restrictions;

final class BrandsBlockedCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\PaymentLinks\Post\PaymentMethodOptions\Card\Restrictions\BrandsBlockedEnum::class;
}
