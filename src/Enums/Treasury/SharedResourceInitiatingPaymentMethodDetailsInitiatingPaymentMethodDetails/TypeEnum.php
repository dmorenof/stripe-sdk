<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\SharedResourceInitiatingPaymentMethodDetailsInitiatingPaymentMethodDetails;

enum TypeEnum: string
{
    case Balance = 'balance';
    case FinancialAccount = 'financial_account';
    case IssuingCard = 'issuing_card';
    case Stripe = 'stripe';
    case UsBankAccount = 'us_bank_account';
}
