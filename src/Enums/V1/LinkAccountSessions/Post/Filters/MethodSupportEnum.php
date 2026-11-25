<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\LinkAccountSessions\Post\Filters;

enum MethodSupportEnum: string
{
    case All = 'all';
    case AtLeastOne = 'at_least_one';
    case None = 'none';
}
