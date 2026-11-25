<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Charge\Refunds;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Refund> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Refund::class;
}
