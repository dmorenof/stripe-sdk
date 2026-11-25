<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardAuthorizationControls;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Issuing\CardAuthorizationControls\AllowedCategoriesEnum> */
final class AllowedCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Issuing\CardAuthorizationControls\AllowedCategoriesEnum::class;
}
