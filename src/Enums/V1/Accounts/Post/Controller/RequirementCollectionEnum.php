<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\Post\Controller;

enum RequirementCollectionEnum: string
{
    case Application = 'application';
    case Stripe = 'stripe';
}
