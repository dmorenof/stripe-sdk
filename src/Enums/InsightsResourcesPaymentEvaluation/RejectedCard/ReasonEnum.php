<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\RejectedCard;

enum ReasonEnum: string
{
    case AuthenticationFailed = 'authentication_failed';
    case DoNotHonor = 'do_not_honor';
    case Expired = 'expired';
    case IncorrectCvc = 'incorrect_cvc';
    case IncorrectNumber = 'incorrect_number';
    case IncorrectPostalCode = 'incorrect_postal_code';
    case InsufficientFunds = 'insufficient_funds';
    case InvalidAccount = 'invalid_account';
    case LostCard = 'lost_card';
    case Other = 'other';
    case ProcessingError = 'processing_error';
    case ReportedStolen = 'reported_stolen';
    case TryAgainLater = 'try_again_later';
}
