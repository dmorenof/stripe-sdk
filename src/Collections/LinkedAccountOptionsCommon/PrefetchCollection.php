<?php

declare(strict_types=1);

namespace StripeSDK\Collections\LinkedAccountOptionsCommon;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\LinkedAccountOptionsCommon\PrefetchEnum> */
final class PrefetchCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\LinkedAccountOptionsCommon\PrefetchEnum::class;
}
