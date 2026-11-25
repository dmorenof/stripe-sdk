<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\MoneyMovementCard;

enum PaymentTypeEnum: string
{
    case OneOff = 'one_off';
    case Recurring = 'recurring';
    case SetupOneOff = 'setup_one_off';
    case SetupRecurring = 'setup_recurring';
}
