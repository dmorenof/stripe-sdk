<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\Session;

enum CustomerCreationEnum: string
{
    case Always = 'always';
    case IfRequired = 'if_required';
}
