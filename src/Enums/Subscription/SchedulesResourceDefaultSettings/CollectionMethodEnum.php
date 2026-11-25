<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulesResourceDefaultSettings;

enum CollectionMethodEnum: string
{
    case ChargeAutomatically = 'charge_automatically';
    case SendInvoice = 'send_invoice';
}
