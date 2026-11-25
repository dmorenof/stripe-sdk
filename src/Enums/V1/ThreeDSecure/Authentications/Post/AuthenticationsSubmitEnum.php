<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post;

enum AuthenticationsSubmitEnum: string
{
    case Always = 'always';
    case IfFingerprintingNotSupported = 'if_fingerprinting_not_supported';
    case Never_ = 'never';
}
