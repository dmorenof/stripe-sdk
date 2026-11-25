<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post;

enum CustomerCreationEnum: string
{
    case Always = 'always';
    case IfRequired = 'if_required';
}
