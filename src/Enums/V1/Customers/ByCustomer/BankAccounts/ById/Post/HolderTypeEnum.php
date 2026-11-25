<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Customers\ByCustomer\BankAccounts\ById\Post;

enum HolderTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
