<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\Post;

enum ItemsBehaviorEnum: string
{
    case Exclude = 'exclude';
    case Include_ = 'include';
}
