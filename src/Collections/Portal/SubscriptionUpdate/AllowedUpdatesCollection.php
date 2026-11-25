<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Portal\SubscriptionUpdate;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Portal\SubscriptionUpdate\AllowedUpdatesEnum> */
final class AllowedUpdatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Portal\SubscriptionUpdate\AllowedUpdatesEnum::class;
}
