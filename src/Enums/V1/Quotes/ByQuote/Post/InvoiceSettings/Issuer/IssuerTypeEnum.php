<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Quotes\ByQuote\Post\InvoiceSettings\Issuer;

enum IssuerTypeEnum: string
{
    case Account = 'account';
    case Self_ = 'self';
}
