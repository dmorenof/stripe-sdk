<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\UsBankAccount;

enum HolderTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
