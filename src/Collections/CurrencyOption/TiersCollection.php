<?php

declare(strict_types=1);

namespace StripeSDK\Collections\CurrencyOption;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\PriceTier> */
final class TiersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\PriceTier::class;
}
