<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Subscription;

final class BillingSchedulesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\SubscriptionsResource\BillingSchedules::class;
}
