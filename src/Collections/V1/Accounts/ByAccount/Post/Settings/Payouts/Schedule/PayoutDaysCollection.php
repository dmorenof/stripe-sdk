<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Accounts\ByAccount\Post\Settings\Payouts\Schedule;

final class PayoutDaysCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Accounts\ByAccount\Post\Settings\Payouts\Schedule\PayoutDaysEnum::class;
}
