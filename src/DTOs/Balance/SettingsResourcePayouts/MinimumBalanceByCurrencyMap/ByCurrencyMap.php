<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance\SettingsResourcePayouts\MinimumBalanceByCurrencyMap;

/** @extends \Dmorenof\SdkRuntime\Map<int> */
final class ByCurrencyMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'int';
    protected const bool VALUE_NULLABLE = false;
}
