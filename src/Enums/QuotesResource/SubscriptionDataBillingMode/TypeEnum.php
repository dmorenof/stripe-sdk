<?php

declare(strict_types=1);

namespace StripeSDK\Enums\QuotesResource\SubscriptionDataBillingMode;

enum TypeEnum: string
{
    case Classic = 'classic';
    case Flexible = 'flexible';
}
