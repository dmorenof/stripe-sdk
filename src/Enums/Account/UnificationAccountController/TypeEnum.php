<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\UnificationAccountController;

enum TypeEnum: string
{
    case Account = 'account';
    case Application = 'application';
}
