<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FinancialConnections\Account;

final class PermissionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\FinancialConnections\Account\PermissionsEnum::class;
}
