<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\LinksResourceCustomFields;

enum TypeEnum: string
{
    case Dropdown = 'dropdown';
    case Numeric = 'numeric';
    case Text = 'text';
}
