<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\Post;

enum CardsStatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
}
