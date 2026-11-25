<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Customer\Subscriptions;

final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Subscription::class;
}
