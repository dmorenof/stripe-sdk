<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\Pix\MandateOptions;

enum PaymentScheduleEnum: string
{
    case Halfyearly = 'halfyearly';
    case Monthly = 'monthly';
    case Quarterly = 'quarterly';
    case Weekly = 'weekly';
    case Yearly = 'yearly';
}
