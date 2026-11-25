<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Outbound\PaymentsPaymentMethodDetailsUsBankAccount;

enum HolderTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
