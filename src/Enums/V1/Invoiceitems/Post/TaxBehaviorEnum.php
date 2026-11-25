<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoiceitems\Post;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
    case Unspecified = 'unspecified';
}
