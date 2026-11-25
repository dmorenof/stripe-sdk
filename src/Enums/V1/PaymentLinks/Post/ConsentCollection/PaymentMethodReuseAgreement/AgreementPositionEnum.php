<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\Post\ConsentCollection\PaymentMethodReuseAgreement;

enum AgreementPositionEnum: string
{
    case Auto = 'auto';
    case Hidden = 'hidden';
}
