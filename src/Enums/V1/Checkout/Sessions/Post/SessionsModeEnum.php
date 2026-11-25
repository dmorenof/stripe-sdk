<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post;

enum SessionsModeEnum: string
{
    case Payment = 'payment';
    case Setup = 'setup';
    case Subscription = 'subscription';
}
