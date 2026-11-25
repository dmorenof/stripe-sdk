<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetails;

enum FundingEnum: string
{
    case Credit = 'credit';
    case Debit = 'debit';
    case Prepaid = 'prepaid';
    case Unknown = 'unknown';
}
