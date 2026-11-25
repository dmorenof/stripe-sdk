<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Treasury\FinancialAccount;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Treasury\FinancialAccount\PendingFeaturesEnum> */
final class PendingFeaturesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Treasury\FinancialAccount\PendingFeaturesEnum::class;
}
