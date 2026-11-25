<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardGooglePay;

enum IneligibleReasonEnum: string
{
    case MissingAgreement = 'missing_agreement';
    case MissingCardholderContact = 'missing_cardholder_contact';
    case UnsupportedRegion = 'unsupported_region';
}
