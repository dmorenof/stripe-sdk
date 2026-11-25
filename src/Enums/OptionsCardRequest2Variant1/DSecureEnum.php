<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsCardRequest2Variant1;

enum DSecureEnum: string
{
    case Any = 'any';
    case Automatic = 'automatic';
    case Challenge = 'challenge';
}
