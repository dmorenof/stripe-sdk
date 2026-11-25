<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us;

/**
 * state_sales_tax
 */
final class SalesTaxRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'elections',
    ];

    public \StripeSDK\Collections\V1\Tax\Registrations\Post\CountryOptions\Us\StateSalesTax\TaxElectionsCollection $elections;
}
