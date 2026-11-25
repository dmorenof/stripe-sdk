<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Subscription\SchedulePhaseConfiguration;

final class DiscountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\StackableDiscountWithDiscountSettingsAndDiscountEnd::class;
}
