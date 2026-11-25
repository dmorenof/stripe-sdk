<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Intent;

enum ConfirmationMethodEnum: string
{
    case Automatic = 'automatic';
    case Manual = 'manual';
}
