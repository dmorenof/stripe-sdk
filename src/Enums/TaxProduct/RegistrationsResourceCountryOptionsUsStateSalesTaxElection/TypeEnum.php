<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsUsStateSalesTaxElection;

enum TypeEnum: string
{
    case LocalUseTax = 'local_use_tax';
    case SimplifiedSellersUseTax = 'simplified_sellers_use_tax';
    case SingleLocalUseTax = 'single_local_use_tax';
}
