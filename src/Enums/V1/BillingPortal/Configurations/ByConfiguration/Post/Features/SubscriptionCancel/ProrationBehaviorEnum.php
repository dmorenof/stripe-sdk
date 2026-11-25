<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionCancel;

enum ProrationBehaviorEnum: string
{
    case AlwaysInvoice = 'always_invoice';
    case CreateProrations = 'create_prorations';
    case None = 'none';
}
