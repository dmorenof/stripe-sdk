<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\BySubscription\Resume\Post;

enum ProrationBehaviorEnum: string
{
    case AlwaysInvoice = 'always_invoice';
    case CreateProrations = 'create_prorations';
    case None = 'none';
}
