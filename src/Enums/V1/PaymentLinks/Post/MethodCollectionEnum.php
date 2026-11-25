<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\Post;

enum MethodCollectionEnum: string
{
    case Always = 'always';
    case IfRequired = 'if_required';
}
