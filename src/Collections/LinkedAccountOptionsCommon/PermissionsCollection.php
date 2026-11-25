<?php

declare(strict_types=1);

namespace StripeSDK\Collections\LinkedAccountOptionsCommon;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\LinkedAccountOptionsCommon\PermissionsEnum> */
final class PermissionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\LinkedAccountOptionsCommon\PermissionsEnum::class;
}
