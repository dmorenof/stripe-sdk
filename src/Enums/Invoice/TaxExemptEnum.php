<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoice;

enum TaxExemptEnum: string
{
    case Exempt = 'exempt';
    case None = 'none';
    case Reverse = 'reverse';
}
