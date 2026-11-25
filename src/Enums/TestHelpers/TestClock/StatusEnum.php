<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TestHelpers\TestClock;

enum StatusEnum: string
{
    case Advancing = 'advancing';
    case InternalFailure = 'internal_failure';
    case Ready = 'ready';
}
