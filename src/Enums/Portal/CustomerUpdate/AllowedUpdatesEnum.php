<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Portal\CustomerUpdate;

enum AllowedUpdatesEnum: string
{
    case Address = 'address';
    case Email = 'email';
    case Name = 'name';
    case Phone = 'phone';
    case Shipping = 'shipping';
    case TaxId = 'tax_id';
}
