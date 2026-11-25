<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post;

enum OnCompletionEnum: string
{
    case Always = 'always';
    case IfRequired = 'if_required';
    case Never_ = 'never';
}
