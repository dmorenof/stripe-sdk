<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\ConsentCollection\PaymentMethodReuseAgreement;

enum AgreementPositionEnum: string
{
    case Auto = 'auto';
    case Hidden = 'hidden';
}
