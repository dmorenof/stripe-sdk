<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\IntentPaymentMethodOptionsCardMandateOptions;

enum IntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Sporadic = 'sporadic';
    case Week = 'week';
    case Year = 'year';
}
