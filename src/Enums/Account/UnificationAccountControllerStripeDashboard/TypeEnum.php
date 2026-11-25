<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\UnificationAccountControllerStripeDashboard;

enum TypeEnum: string
{
    case Express = 'express';
    case Full = 'full';
    case None = 'none';
}
