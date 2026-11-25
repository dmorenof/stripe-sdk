<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\Post\Controller\StripeDashboard;

enum DashboardTypeEnum: string
{
    case Express = 'express';
    case Full = 'full';
    case None = 'none';
}
