<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\AcssDebit\MandateOptions;

enum PaymentScheduleEnum: string
{
    case Combined = 'combined';
    case Interval = 'interval';
    case Sporadic = 'sporadic';
}
