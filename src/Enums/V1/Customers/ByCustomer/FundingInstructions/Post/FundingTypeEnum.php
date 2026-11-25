<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Customers\ByCustomer\FundingInstructions\Post;

enum FundingTypeEnum: string
{
    case BankTransfer = 'bank_transfer';
}
