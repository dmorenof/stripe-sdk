<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\Post\Controller\Fees;

enum FeesPayerEnum: string
{
    case Account = 'account';
    case Application = 'application';
}
