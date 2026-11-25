<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post;

enum AddressCollectionEnum: string
{
    case Auto = 'auto';
    case Required = 'required';
}
