<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\AutomaticPaymentMethods;

enum AllowRedirectsEnum: string
{
    case Always = 'always';
    case Never_ = 'never';
}
