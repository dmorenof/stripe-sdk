<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PaypalSellerProtection;

enum DisputeCategoriesEnum: string
{
    case Fraudulent = 'fraudulent';
    case ProductNotReceived = 'product_not_received';
}
