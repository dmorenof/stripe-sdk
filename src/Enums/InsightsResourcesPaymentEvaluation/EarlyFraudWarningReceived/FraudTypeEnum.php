<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\EarlyFraudWarningReceived;

enum FraudTypeEnum: string
{
    case MadeWithLostCard = 'made_with_lost_card';
    case MadeWithStolenCard = 'made_with_stolen_card';
    case Other = 'other';
    case UnauthorizedUseOfCard = 'unauthorized_use_of_card';
}
