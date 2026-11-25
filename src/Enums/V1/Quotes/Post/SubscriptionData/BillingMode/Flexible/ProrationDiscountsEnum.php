<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Quotes\Post\SubscriptionData\BillingMode\Flexible;

enum ProrationDiscountsEnum: string
{
    case Included = 'included';
    case Itemized = 'itemized';
}
