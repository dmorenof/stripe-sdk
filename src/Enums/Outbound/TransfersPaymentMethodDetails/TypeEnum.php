<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Outbound\TransfersPaymentMethodDetails;

enum TypeEnum: string
{
    case FinancialAccount = 'financial_account';
    case UsBankAccount = 'us_bank_account';
}
