<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardShipping;

enum CarrierEnum: string
{
    case Correos = 'correos';
    case Dhl = 'dhl';
    case Fedex = 'fedex';
    case RoyalMail = 'royal_mail';
    case Usps = 'usps';
}
