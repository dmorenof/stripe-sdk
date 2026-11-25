<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardDetailsApiResourceMulticapture;

enum StatusEnum: string
{
    case Available = 'available';
    case Unavailable = 'unavailable';
}
