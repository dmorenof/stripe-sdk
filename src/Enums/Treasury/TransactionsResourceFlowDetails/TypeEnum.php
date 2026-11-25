<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\TransactionsResourceFlowDetails;

enum TypeEnum: string
{
    case CreditReversal = 'credit_reversal';
    case DebitReversal = 'debit_reversal';
    case InboundTransfer = 'inbound_transfer';
    case IssuingAuthorization = 'issuing_authorization';
    case Other = 'other';
    case OutboundPayment = 'outbound_payment';
    case OutboundTransfer = 'outbound_transfer';
    case ReceivedCredit = 'received_credit';
    case ReceivedDebit = 'received_debit';
}
