<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ShippingRate\FixedAmount;

/** @extends \Dmorenof\SdkRuntime\Map<\StripeSDK\DTOs\ShippingRate\CurrencyOption> */
final class CurrencyOptionsMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = '\\StripeSDK\\DTOs\\ShippingRate\\CurrencyOption';
    protected const bool VALUE_NULLABLE = false;
}
