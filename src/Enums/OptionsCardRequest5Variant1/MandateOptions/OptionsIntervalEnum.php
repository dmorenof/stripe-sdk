<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsCardRequest5Variant1\MandateOptions;

enum OptionsIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Sporadic = 'sporadic';
    case Week = 'week';
    case Year = 'year';
}
