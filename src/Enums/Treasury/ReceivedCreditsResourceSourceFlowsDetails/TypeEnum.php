<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\ReceivedCreditsResourceSourceFlowsDetails;

enum TypeEnum: string
{
    case CreditReversal = 'credit_reversal';
    case Other = 'other';
    case OutboundPayment = 'outbound_payment';
    case OutboundTransfer = 'outbound_transfer';
    case Payout = 'payout';
}
