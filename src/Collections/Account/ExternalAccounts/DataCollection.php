<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Account\ExternalAccounts;

final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Account\ExternalAccounts\DataDTO::class;
}
