<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardholderAuthorizationControls;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Issuing\CardholderAuthorizationControls\BlockedCategoriesEnum> */
final class BlockedCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Issuing\CardholderAuthorizationControls\BlockedCategoriesEnum::class;
}
