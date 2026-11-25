<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\TransactionEntry;

enum TypeEnum: string
{
    case CreditReversal = 'credit_reversal';
    case CreditReversalPosting = 'credit_reversal_posting';
    case DebitReversal = 'debit_reversal';
    case InboundTransfer = 'inbound_transfer';
    case InboundTransferReturn = 'inbound_transfer_return';
    case IssuingAuthorizationHold = 'issuing_authorization_hold';
    case IssuingAuthorizationRelease = 'issuing_authorization_release';
    case Other = 'other';
    case OutboundPayment = 'outbound_payment';
    case OutboundPaymentCancellation = 'outbound_payment_cancellation';
    case OutboundPaymentFailure = 'outbound_payment_failure';
    case OutboundPaymentPosting = 'outbound_payment_posting';
    case OutboundPaymentReturn = 'outbound_payment_return';
    case OutboundTransfer = 'outbound_transfer';
    case OutboundTransferCancellation = 'outbound_transfer_cancellation';
    case OutboundTransferFailure = 'outbound_transfer_failure';
    case OutboundTransferPosting = 'outbound_transfer_posting';
    case OutboundTransferReturn = 'outbound_transfer_return';
    case ReceivedCredit = 'received_credit';
    case ReceivedDebit = 'received_debit';
}
