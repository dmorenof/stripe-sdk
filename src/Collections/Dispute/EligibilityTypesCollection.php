<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Dispute;

final class EligibilityTypesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Dispute\EligibilityTypesEnum::class;
}
