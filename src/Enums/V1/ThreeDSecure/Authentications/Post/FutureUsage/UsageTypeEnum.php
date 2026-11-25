<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FutureUsage;

enum UsageTypeEnum: string
{
    case CardOnFile = 'card_on_file';
    case Installment = 'installment';
    case Recurring = 'recurring';
}
