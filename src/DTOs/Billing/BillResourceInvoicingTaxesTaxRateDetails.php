<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingTaxesTaxRateDetails
 */
final class BillResourceInvoicingTaxesTaxRateDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'tax_rate',
    ];

    /**
     * ID of the tax rate
     */
    public \StripeSDK\DTOs\Billing\BillResourceInvoicingTaxesTaxRateDetails\TaxRateDTO $tax_rate;
}
