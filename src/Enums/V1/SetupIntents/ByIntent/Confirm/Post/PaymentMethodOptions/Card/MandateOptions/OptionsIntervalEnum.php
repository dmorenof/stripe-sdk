<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card\MandateOptions;

enum OptionsIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Sporadic = 'sporadic';
    case Week = 'week';
    case Year = 'year';
}
