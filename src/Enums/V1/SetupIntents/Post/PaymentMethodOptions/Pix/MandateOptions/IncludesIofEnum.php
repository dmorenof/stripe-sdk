<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Pix\MandateOptions;

enum IncludesIofEnum: string
{
    case Always = 'always';
    case Never_ = 'never';
}
