<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Forwarding\Request;

enum ReplacementsEnum: string
{
    case CardCvc = 'card_cvc';
    case CardExpiry = 'card_expiry';
    case CardNumber = 'card_number';
    case CardholderName = 'cardholder_name';
    case RequestSignature = 'request_signature';
}
