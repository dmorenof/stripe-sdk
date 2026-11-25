<?php

declare(strict_types=1);

namespace StripeSDK\Collections\InvoicesResource\ShippingCost;

final class TaxesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\LineItems\TaxAmount::class;
}
