<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MoneyMovementDetails\Card;

enum PaymentTypeEnum: string
{
    case OneOff = 'one_off';
    case Recurring = 'recurring';
    case SetupOneOff = 'setup_one_off';
    case SetupRecurring = 'setup_recurring';
}
