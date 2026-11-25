<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentIntents\Post;

enum ConfirmationMethodEnum: string
{
    case Automatic = 'automatic';
    case Manual = 'manual';
}
