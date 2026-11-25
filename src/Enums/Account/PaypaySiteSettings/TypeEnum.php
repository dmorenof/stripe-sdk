<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\PaypaySiteSettings;

enum TypeEnum: string
{
    case Accessible = 'accessible';
    case InDevelopment = 'in_development';
    case Restricted = 'restricted';
}
