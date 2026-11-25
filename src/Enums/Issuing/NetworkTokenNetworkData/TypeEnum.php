<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\NetworkTokenNetworkData;

enum TypeEnum: string
{
    case Mastercard = 'mastercard';
    case Visa = 'visa';
}
