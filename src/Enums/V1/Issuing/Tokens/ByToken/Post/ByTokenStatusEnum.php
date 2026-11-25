<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Tokens\ByToken\Post;

enum ByTokenStatusEnum: string
{
    case Active = 'active';
    case Deleted = 'deleted';
    case Suspended = 'suspended';
}
