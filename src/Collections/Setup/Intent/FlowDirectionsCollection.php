<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Setup\Intent;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Setup\Intent\FlowDirectionsEnum> */
final class FlowDirectionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Setup\Intent\FlowDirectionsEnum::class;
}
