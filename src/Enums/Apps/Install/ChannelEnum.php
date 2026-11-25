<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Apps\Install;

enum ChannelEnum: string
{
    case PrivateLive = 'private_live';
    case PrivateTest = 'private_test';
    case Public_ = 'public';
    case Review = 'review';
    case Testing = 'testing';
}
