<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post\Card\Networks;

enum NetworksPreferredEnum: string
{
    case Empty_ = '';
    case CartesBancaires = 'cartes_bancaires';
    case Mastercard = 'mastercard';
    case Visa = 'visa';
}
