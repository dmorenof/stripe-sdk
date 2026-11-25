<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ExternalAccounts\ById\Post;

enum HolderTypeEnum: string
{
    case Empty_ = '';
    case Company = 'company';
    case Individual = 'individual';
}
