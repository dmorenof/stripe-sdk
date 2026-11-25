<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\Capabilities\JpBankTransferPayments;

enum TransferPaymentsEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
