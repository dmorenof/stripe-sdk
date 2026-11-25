<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\SubscriptionData;

enum ProrationBehaviorEnum: string
{
    case CreateProrations = 'create_prorations';
    case None = 'none';
}
