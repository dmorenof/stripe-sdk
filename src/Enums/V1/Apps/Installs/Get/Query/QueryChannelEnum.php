<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Apps\Installs\Get\Query;

enum QueryChannelEnum: string
{
    case PrivateLive = 'private_live';
    case PrivateTest = 'private_test';
    case Public_ = 'public';
    case Testing = 'testing';
}
