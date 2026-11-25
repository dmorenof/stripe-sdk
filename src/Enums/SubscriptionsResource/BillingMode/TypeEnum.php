<?php

declare(strict_types=1);

namespace StripeSDK\Enums\SubscriptionsResource\BillingMode;

enum TypeEnum: string
{
    case Classic = 'classic';
    case Flexible = 'flexible';
}
