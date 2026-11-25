<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\Post;

enum CardsTypeEnum: string
{
    case Physical = 'physical';
    case Virtual = 'virtual';
}
