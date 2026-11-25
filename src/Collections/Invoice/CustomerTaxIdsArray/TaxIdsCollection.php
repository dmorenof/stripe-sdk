<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice\CustomerTaxIdsArray;

final class TaxIdsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\InvoicesResource\InvoiceTaxId::class;
}
