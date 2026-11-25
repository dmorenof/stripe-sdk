<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\FlowsAutomaticPaymentMethodsPaymentIntent;

enum AllowRedirectsEnum: string
{
    case Always = 'always';
    case Never_ = 'never';
}
