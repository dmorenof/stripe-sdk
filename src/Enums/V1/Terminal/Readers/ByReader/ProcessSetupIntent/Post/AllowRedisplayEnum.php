<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Terminal\Readers\ByReader\ProcessSetupIntent\Post;

enum AllowRedisplayEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
