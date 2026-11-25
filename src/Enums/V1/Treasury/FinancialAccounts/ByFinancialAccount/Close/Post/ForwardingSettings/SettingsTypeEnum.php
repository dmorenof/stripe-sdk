<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\FinancialAccounts\ByFinancialAccount\Close\Post\ForwardingSettings;

enum SettingsTypeEnum: string
{
    case FinancialAccount = 'financial_account';
    case PaymentMethod = 'payment_method';
}
