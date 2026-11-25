<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Subscription;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\SubscriptionsResource\BillingSchedules> */
final class BillingSchedulesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\SubscriptionsResource\BillingSchedules::class;
}
