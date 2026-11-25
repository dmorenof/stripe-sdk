<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsPixRequest2Variant1\MandateOptions;

enum PaymentScheduleEnum: string
{
    case Halfyearly = 'halfyearly';
    case Monthly = 'monthly';
    case Quarterly = 'quarterly';
    case Weekly = 'weekly';
    case Yearly = 'yearly';
}
