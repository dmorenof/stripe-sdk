<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Tax\Calculation\LineItems;

final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Tax\CalculationLineItem::class;
}
