<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post;

enum SetupIntentsUsageEnum: string
{
    case OffSession = 'off_session';
    case OnSession = 'on_session';
}
