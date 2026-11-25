<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Coupon;

/** @extends \Dmorenof\SdkRuntime\Map<\StripeSDK\DTOs\CouponCurrencyOption> */
final class CurrencyOptionsMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = '\\StripeSDK\\DTOs\\CouponCurrencyOption';
    protected const bool VALUE_NULLABLE = false;
}
