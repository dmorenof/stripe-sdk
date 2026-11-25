<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Link;

enum AddressCollectionEnum: string
{
    case Auto = 'auto';
    case Required = 'required';
}
