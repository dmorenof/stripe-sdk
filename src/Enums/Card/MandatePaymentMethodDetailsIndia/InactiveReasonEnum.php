<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Card\MandatePaymentMethodDetailsIndia;

enum InactiveReasonEnum: string
{
    case Canceled = 'canceled';
    case CardNotSupported = 'card_not_supported';
    case CurrencyNotSupported = 'currency_not_supported';
    case Expired = 'expired';
    case IssuerNotSupported = 'issuer_not_supported';
    case ProcessingError = 'processing_error';
    case Undetermined = 'undetermined';
}
