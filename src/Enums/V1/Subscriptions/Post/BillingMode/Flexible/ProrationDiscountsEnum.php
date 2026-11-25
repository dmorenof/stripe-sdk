<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\Post\BillingMode\Flexible;

enum ProrationDiscountsEnum: string
{
    case Included = 'included';
    case Itemized = 'itemized';
}
