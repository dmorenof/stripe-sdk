<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Forwarding\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Forwarding\Request\ReplacementsEnum> */
final class ReplacementsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Forwarding\Request\ReplacementsEnum::class;
}
