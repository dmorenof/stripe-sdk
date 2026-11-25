<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\TaxIdCollection;

enum CollectionRequiredEnum: string
{
    case IfSupported = 'if_supported';
    case Never_ = 'never';
}
