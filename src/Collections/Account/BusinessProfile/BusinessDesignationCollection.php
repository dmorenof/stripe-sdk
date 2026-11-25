<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Account\BusinessProfile;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Account\BusinessProfile\BusinessDesignationEnum> */
final class BusinessDesignationCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Account\BusinessProfile\BusinessDesignationEnum::class;
}
