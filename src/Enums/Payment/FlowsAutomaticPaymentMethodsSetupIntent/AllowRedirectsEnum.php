<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\FlowsAutomaticPaymentMethodsSetupIntent;

enum AllowRedirectsEnum: string
{
    case Always = 'always';
    case Never_ = 'never';
}
