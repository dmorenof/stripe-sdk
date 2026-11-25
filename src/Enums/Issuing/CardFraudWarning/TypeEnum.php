<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardFraudWarning;

enum TypeEnum: string
{
    case CardTestingExposure = 'card_testing_exposure';
    case FraudDisputeFiled = 'fraud_dispute_filed';
    case ThirdPartyReported = 'third_party_reported';
    case UserIndicatedFraud = 'user_indicated_fraud';
}
