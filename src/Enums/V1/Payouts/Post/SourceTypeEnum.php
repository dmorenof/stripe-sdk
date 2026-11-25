<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Payouts\Post;

enum SourceTypeEnum: string
{
    case BankAccount = 'bank_account';
    case Card = 'card';
    case Fpx = 'fpx';
}
