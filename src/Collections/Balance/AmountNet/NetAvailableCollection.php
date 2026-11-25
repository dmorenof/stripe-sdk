<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Balance\AmountNet;

final class NetAvailableCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Balance\NetAvailable::class;
}
