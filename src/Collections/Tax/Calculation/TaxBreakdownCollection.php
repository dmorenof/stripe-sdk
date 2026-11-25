<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Tax\Calculation;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\TaxProduct\ResourceTaxBreakdown> */
final class TaxBreakdownCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\TaxProduct\ResourceTaxBreakdown::class;
}
