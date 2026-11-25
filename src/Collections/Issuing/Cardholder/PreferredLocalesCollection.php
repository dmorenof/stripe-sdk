<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\Cardholder;

final class PreferredLocalesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Issuing\Cardholder\PreferredLocalesEnum::class;
}
