<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsPaytoRequest7Variant1\MandateOptions;

enum PaymentScheduleEnum: string
{
    case Empty_ = '';
    case Adhoc = 'adhoc';
    case Annual = 'annual';
    case Daily = 'daily';
    case Fortnightly = 'fortnightly';
    case Monthly = 'monthly';
    case Quarterly = 'quarterly';
    case SemiAnnual = 'semi_annual';
    case Weekly = 'weekly';
}
