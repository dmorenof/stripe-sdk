<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ExchangeRate;

/** @extends \Dmorenof\SdkRuntime\Map<float> */
final class RatesMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'float';
    protected const bool VALUE_NULLABLE = false;
}
