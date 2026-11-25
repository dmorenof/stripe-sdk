<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\Post\Controller\Losses;

enum LossesPaymentsEnum: string
{
    case Application = 'application';
    case Stripe = 'stripe';
}
