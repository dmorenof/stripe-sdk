<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription;

enum CollectionMethodEnum: string
{
    case ChargeAutomatically = 'charge_automatically';
    case SendInvoice = 'send_invoice';
}
