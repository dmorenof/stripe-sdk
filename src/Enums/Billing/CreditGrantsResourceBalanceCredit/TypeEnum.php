<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\CreditGrantsResourceBalanceCredit;

enum TypeEnum: string
{
    case CreditsApplicationInvoiceVoided = 'credits_application_invoice_voided';
    case CreditsGranted = 'credits_granted';
}
