<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Settlement;

enum NetworkEnum: string
{
    case Maestro = 'maestro';
    case Mastercard = 'mastercard';
    case Visa = 'visa';
}
