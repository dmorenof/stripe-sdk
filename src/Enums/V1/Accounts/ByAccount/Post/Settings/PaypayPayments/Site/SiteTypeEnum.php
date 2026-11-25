<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\ByAccount\Post\Settings\PaypayPayments\Site;

enum SiteTypeEnum: string
{
    case Accessible = 'accessible';
    case InDevelopment = 'in_development';
    case Restricted = 'restricted';
}
