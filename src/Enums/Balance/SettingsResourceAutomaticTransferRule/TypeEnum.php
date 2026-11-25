<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Balance\SettingsResourceAutomaticTransferRule;

enum TypeEnum: string
{
    case TransferAll = 'transfer_all';
    case TransferUpToAmount = 'transfer_up_to_amount';
}
