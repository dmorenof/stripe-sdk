<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData;

enum DataTypeEnum: string
{
    case FinancialAccount = 'financial_account';
    case UsBankAccount = 'us_bank_account';
}
