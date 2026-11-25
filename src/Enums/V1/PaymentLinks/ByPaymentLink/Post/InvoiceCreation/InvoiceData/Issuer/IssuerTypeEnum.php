<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\InvoiceCreation\InvoiceData\Issuer;

enum IssuerTypeEnum: string
{
    case Account = 'account';
    case Self_ = 'self';
}
