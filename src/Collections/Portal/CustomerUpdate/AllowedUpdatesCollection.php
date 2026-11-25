<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Portal\CustomerUpdate;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Portal\CustomerUpdate\AllowedUpdatesEnum> */
final class AllowedUpdatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Portal\CustomerUpdate\AllowedUpdatesEnum::class;
}
