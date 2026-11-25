<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Outbound\TransfersPaymentMethodDetailsUsBankAccount;

enum HolderTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
