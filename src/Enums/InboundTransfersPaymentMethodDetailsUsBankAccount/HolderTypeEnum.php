<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InboundTransfersPaymentMethodDetailsUsBankAccount;

enum HolderTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
