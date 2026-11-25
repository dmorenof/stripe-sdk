<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardholderAuthorizationControls;

final class AllowedCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Issuing\CardholderAuthorizationControls\AllowedCategoriesEnum::class;
}
