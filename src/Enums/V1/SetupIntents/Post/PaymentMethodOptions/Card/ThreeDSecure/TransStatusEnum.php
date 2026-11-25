<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Card\ThreeDSecure;

enum TransStatusEnum: string
{
    case A = 'A';
    case C = 'C';
    case I = 'I';
    case N = 'N';
    case R = 'R';
    case U = 'U';
    case Y = 'Y';
}
