<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Quotes\Post\SubscriptionData\BillingMode;

enum ModeTypeEnum: string
{
    case Classic = 'classic';
    case Flexible = 'flexible';
}
