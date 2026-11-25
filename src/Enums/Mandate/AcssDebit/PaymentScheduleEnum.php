<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Mandate\AcssDebit;

enum PaymentScheduleEnum: string
{
    case Combined = 'combined';
    case Interval = 'interval';
    case Sporadic = 'sporadic';
}
