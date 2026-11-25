<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cardholders\Post;

enum CardholdersTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
