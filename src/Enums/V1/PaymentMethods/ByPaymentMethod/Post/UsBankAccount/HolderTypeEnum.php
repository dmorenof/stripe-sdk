<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post\UsBankAccount;

enum HolderTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
