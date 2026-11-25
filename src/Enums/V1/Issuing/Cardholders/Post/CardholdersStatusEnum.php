<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cardholders\Post;

enum CardholdersStatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
}
