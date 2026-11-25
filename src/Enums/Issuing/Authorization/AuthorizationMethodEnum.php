<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Authorization;

enum AuthorizationMethodEnum: string
{
    case Chip = 'chip';
    case Contactless = 'contactless';
    case KeyedIn = 'keyed_in';
    case Online = 'online';
    case Swipe = 'swipe';
}
