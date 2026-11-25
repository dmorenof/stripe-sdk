<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Portal\CustomerUpdate;

final class AllowedUpdatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Portal\CustomerUpdate\AllowedUpdatesEnum::class;
}
