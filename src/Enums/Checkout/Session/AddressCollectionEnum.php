<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\Session;

enum AddressCollectionEnum: string
{
    case Auto = 'auto';
    case Required = 'required';
}
