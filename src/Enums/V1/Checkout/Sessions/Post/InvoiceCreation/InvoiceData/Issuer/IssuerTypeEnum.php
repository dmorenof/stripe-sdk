<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\InvoiceCreation\InvoiceData\Issuer;

enum IssuerTypeEnum: string
{
    case Account = 'account';
    case Self_ = 'self';
}
