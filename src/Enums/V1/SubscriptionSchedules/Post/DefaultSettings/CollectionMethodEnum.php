<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\DefaultSettings;

enum CollectionMethodEnum: string
{
    case ChargeAutomatically = 'charge_automatically';
    case SendInvoice = 'send_invoice';
}
