<?php

declare(strict_types=1);

namespace StripeSDK\Collections\ApplicationFee\Refunds;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\FeeRefund> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\FeeRefund::class;
}
