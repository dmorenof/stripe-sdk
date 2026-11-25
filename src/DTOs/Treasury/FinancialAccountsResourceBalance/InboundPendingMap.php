<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury\FinancialAccountsResourceBalance;

/** @extends \Dmorenof\SdkRuntime\Map<int> */
final class InboundPendingMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'int';
    protected const bool VALUE_NULLABLE = false;
}
