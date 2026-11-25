<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\InvoicePayments\Get\Query;

enum QueryStatusEnum: string
{
    case Canceled = 'canceled';
    case Open = 'open';
    case Paid = 'paid';
}
