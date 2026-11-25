<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account;

enum BusinessTypeEnum: string
{
    case Company = 'company';
    case GovernmentEntity = 'government_entity';
    case Individual = 'individual';
    case NonProfit = 'non_profit';
}
