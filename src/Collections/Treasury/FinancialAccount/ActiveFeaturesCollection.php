<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Treasury\FinancialAccount;

final class ActiveFeaturesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Treasury\FinancialAccount\ActiveFeaturesEnum::class;
}
