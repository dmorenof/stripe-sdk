<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Link;

enum CustomerCreationEnum: string
{
    case Always = 'always';
    case IfRequired = 'if_required';
}
