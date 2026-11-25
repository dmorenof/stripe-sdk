<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Token;

enum NetworkEnum: string
{
    case Mastercard = 'mastercard';
    case Visa = 'visa';
}
