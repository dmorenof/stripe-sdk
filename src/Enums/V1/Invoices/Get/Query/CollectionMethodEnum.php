<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\Get\Query;

enum CollectionMethodEnum: string
{
    case ChargeAutomatically = 'charge_automatically';
    case SendInvoice = 'send_invoice';
}
