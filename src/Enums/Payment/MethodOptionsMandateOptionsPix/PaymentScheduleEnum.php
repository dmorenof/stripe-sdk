<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsMandateOptionsPix;

enum PaymentScheduleEnum: string
{
    case Halfyearly = 'halfyearly';
    case Monthly = 'monthly';
    case Quarterly = 'quarterly';
    case Weekly = 'weekly';
    case Yearly = 'yearly';
}
