<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post;

enum ByCardStatusEnum: string
{
    case Active = 'active';
    case Canceled = 'canceled';
    case Inactive = 'inactive';
}
