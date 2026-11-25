<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions\Card\Installments\Plan;

enum PlanTypeEnum: string
{
    case Bonus = 'bonus';
    case FixedCount = 'fixed_count';
    case Revolving = 'revolving';
}
