<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Sources\Post\Receiver;

enum AttributesMethodEnum: string
{
    case Email = 'email';
    case Manual = 'manual';
    case None = 'none';
}
