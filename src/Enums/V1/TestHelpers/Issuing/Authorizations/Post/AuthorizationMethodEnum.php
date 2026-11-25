<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post;

enum AuthorizationMethodEnum: string
{
    case Chip = 'chip';
    case Contactless = 'contactless';
    case KeyedIn = 'keyed_in';
    case Online = 'online';
    case Swipe = 'swipe';
}
