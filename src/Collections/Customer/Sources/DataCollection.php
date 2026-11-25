<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Customer\Sources;

final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Customer\Sources\DataDTO::class;
}
