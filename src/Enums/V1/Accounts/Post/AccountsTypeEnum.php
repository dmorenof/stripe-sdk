<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\Post;

enum AccountsTypeEnum: string
{
    case Custom = 'custom';
    case Express = 'express';
    case Standard = 'standard';
}
