<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Payment\MethodOptionsCardInstallments;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan> */
final class AvailablePlansCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan::class;
}
