<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Tax\Transactions\CreateReversal\Post;

enum CreateReversalModeEnum: string
{
    case Full = 'full';
    case Partial = 'partial';
}
