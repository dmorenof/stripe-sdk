<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Payment\Link;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Payment\Link\MethodTypesEnum> */
final class MethodTypesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Payment\Link\MethodTypesEnum::class;
}
