<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ConfirmationTokensResource\PaymentMethodPreview;

enum AllowRedisplayEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
