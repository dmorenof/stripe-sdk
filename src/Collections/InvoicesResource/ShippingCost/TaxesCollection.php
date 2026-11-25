<?php

declare(strict_types=1);

namespace StripeSDK\Collections\InvoicesResource\ShippingCost;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\LineItems\TaxAmount> */
final class TaxesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\LineItems\TaxAmount::class;
}
