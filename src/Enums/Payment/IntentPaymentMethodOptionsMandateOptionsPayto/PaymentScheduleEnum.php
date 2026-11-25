<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\IntentPaymentMethodOptionsMandateOptionsPayto;

enum PaymentScheduleEnum: string
{
    case Adhoc = 'adhoc';
    case Annual = 'annual';
    case Daily = 'daily';
    case Fortnightly = 'fortnightly';
    case Monthly = 'monthly';
    case Quarterly = 'quarterly';
    case SemiAnnual = 'semi_annual';
    case Weekly = 'weekly';
}
