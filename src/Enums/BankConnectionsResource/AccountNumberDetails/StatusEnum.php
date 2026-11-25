<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankConnectionsResource\AccountNumberDetails;

enum StatusEnum: string
{
    case Deactivated = 'deactivated';
    case Expired = 'expired';
    case Pending = 'pending';
    case Transactable = 'transactable';
}
