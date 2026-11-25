<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\BillingMode;

enum ModeTypeEnum: string
{
    case Classic = 'classic';
    case Flexible = 'flexible';
}
