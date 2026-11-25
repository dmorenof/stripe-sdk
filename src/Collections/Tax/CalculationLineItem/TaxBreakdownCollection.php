<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Tax\CalculationLineItem;

final class TaxBreakdownCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\TaxProduct\ResourceLineItemTaxBreakdown::class;
}
