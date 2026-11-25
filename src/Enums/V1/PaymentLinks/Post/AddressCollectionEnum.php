<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\Post;

enum AddressCollectionEnum: string
{
    case Auto = 'auto';
    case Required = 'required';
}
