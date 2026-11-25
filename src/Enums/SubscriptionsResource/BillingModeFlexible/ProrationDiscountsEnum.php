<?php

declare(strict_types=1);

namespace StripeSDK\Enums\SubscriptionsResource\BillingModeFlexible;

enum ProrationDiscountsEnum: string
{
    case Included = 'included';
    case Itemized = 'itemized';
}
