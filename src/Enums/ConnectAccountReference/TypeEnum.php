<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ConnectAccountReference;

enum TypeEnum: string
{
    case Account = 'account';
    case Self_ = 'self';
}
