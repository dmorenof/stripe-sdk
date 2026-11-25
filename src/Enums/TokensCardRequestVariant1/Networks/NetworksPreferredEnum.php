<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TokensCardRequestVariant1\Networks;

enum NetworksPreferredEnum: string
{
    case CartesBancaires = 'cartes_bancaires';
    case Mastercard = 'mastercard';
    case Visa = 'visa';
}
