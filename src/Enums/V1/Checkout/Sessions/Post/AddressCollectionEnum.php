<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post;

enum AddressCollectionEnum: string
{
    case Auto = 'auto';
    case Required = 'required';
}
