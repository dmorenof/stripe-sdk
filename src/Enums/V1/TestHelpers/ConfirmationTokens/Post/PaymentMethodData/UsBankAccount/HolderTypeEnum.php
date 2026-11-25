<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodData\UsBankAccount;

enum HolderTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
