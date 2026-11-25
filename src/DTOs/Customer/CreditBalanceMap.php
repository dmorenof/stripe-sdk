<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/** @extends \Dmorenof\SdkRuntime\Map<int> */
final class CreditBalanceMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'int';
    protected const bool VALUE_NULLABLE = false;
}
