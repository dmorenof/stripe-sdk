<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\UnificationAccountController;

enum RequirementCollectionEnum: string
{
    case Application = 'application';
    case Stripe = 'stripe';
}
