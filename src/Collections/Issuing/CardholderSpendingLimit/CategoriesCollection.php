<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardholderSpendingLimit;

final class CategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Issuing\CardholderSpendingLimit\CategoriesEnum::class;
}
