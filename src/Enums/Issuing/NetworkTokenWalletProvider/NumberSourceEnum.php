<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\NetworkTokenWalletProvider;

enum NumberSourceEnum: string
{
    case App = 'app';
    case Manual = 'manual';
    case OnFile = 'on_file';
    case Other = 'other';
}
