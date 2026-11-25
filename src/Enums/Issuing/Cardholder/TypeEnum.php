<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Cardholder;

enum TypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
