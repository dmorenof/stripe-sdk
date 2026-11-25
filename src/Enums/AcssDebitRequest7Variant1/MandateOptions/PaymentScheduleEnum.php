<?php

declare(strict_types=1);

namespace StripeSDK\Enums\AcssDebitRequest7Variant1\MandateOptions;

enum PaymentScheduleEnum: string
{
    case Combined = 'combined';
    case Interval = 'interval';
    case Sporadic = 'sporadic';
}
