<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\PagesCheckoutSessionCustomerDetails;

enum TaxExemptEnum: string
{
    case Exempt = 'exempt';
    case None = 'none';
    case Reverse = 'reverse';
}
