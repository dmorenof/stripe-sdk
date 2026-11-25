<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecure\Authentication;

enum DirectoryServerEnum: string
{
    case AmericanExpress = 'american_express';
    case CartesBancaires = 'cartes_bancaires';
    case Discover = 'discover';
    case Mastercard = 'mastercard';
    case Visa = 'visa';
}
