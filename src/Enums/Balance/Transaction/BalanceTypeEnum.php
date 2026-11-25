<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Balance\Transaction;

enum BalanceTypeEnum: string
{
    case Issuing = 'issuing';
    case Payments = 'payments';
    case RefundAndDisputePrefunding = 'refund_and_dispute_prefunding';
    case RiskReserved = 'risk_reserved';
}
