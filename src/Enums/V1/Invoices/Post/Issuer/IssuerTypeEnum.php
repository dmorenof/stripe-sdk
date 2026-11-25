<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\Post\Issuer;

enum IssuerTypeEnum: string
{
    case Account = 'account';
    case Self_ = 'self';
}
