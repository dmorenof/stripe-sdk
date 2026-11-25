<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentIntents\Post\AutomaticPaymentMethods;

enum AllowRedirectsEnum: string
{
    case Always = 'always';
    case Never_ = 'never';
}
