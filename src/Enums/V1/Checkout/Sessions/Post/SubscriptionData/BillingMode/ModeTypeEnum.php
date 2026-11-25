<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\SubscriptionData\BillingMode;

enum ModeTypeEnum: string
{
    case Classic = 'classic';
    case Flexible = 'flexible';
}
