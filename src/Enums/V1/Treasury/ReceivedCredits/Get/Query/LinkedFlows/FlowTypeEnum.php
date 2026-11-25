<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\ReceivedCredits\Get\Query\LinkedFlows;

enum FlowTypeEnum: string
{
    case CreditReversal = 'credit_reversal';
    case Other = 'other';
    case OutboundPayment = 'outbound_payment';
    case OutboundTransfer = 'outbound_transfer';
    case Payout = 'payout';
}
