<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Subscription\SchedulePhaseConfiguration;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Subscription\ScheduleConfigurationItem> */
final class ItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Subscription\ScheduleConfigurationItem::class;
}
