<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FinancialConnections\Session;

final class PrefetchCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\FinancialConnections\Session\PrefetchEnum::class;
}
