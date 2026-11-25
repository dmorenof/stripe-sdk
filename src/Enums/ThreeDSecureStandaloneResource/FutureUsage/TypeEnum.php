<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecureStandaloneResource\FutureUsage;

enum TypeEnum: string
{
    case CardOnFile = 'card_on_file';
    case Installment = 'installment';
    case Recurring = 'recurring';
}
