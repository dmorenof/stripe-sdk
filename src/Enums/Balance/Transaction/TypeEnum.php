<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Balance\Transaction;

enum TypeEnum: string
{
    case Adjustment = 'adjustment';
    case Advance = 'advance';
    case AdvanceFunding = 'advance_funding';
    case AnticipationRepayment = 'anticipation_repayment';
    case ApplicationFee = 'application_fee';
    case ApplicationFeeRefund = 'application_fee_refund';
    case Charge = 'charge';
    case ClimateOrderPurchase = 'climate_order_purchase';
    case ClimateOrderRefund = 'climate_order_refund';
    case ConnectCollectionTransfer = 'connect_collection_transfer';
    case Contribution = 'contribution';
    case FeeCreditFunding = 'fee_credit_funding';
    case InboundTransfer = 'inbound_transfer';
    case InboundTransferReversal = 'inbound_transfer_reversal';
    case IssuingAuthorizationHold = 'issuing_authorization_hold';
    case IssuingAuthorizationRelease = 'issuing_authorization_release';
    case IssuingDispute = 'issuing_dispute';
    case IssuingDisputeProvisionalCredit = 'issuing_dispute_provisional_credit';
    case IssuingDisputeProvisionalCreditReversal = 'issuing_dispute_provisional_credit_reversal';
    case IssuingTransaction = 'issuing_transaction';
    case ObligationOutbound = 'obligation_outbound';
    case ObligationReversalInbound = 'obligation_reversal_inbound';
    case Payment = 'payment';
    case PaymentFailureRefund = 'payment_failure_refund';
    case PaymentNetworkReserveHold = 'payment_network_reserve_hold';
    case PaymentNetworkReserveRelease = 'payment_network_reserve_release';
    case PaymentRefund = 'payment_refund';
    case PaymentReversal = 'payment_reversal';
    case PaymentUnreconciled = 'payment_unreconciled';
    case Payout = 'payout';
    case PayoutCancel = 'payout_cancel';
    case PayoutFailure = 'payout_failure';
    case PayoutMinimumBalanceHold = 'payout_minimum_balance_hold';
    case PayoutMinimumBalanceRelease = 'payout_minimum_balance_release';
    case Refund = 'refund';
    case RefundFailure = 'refund_failure';
    case ReserveHold = 'reserve_hold';
    case ReserveRelease = 'reserve_release';
    case ReserveTransaction = 'reserve_transaction';
    case ReservedFunds = 'reserved_funds';
    case StripeBalancePaymentDebit = 'stripe_balance_payment_debit';
    case StripeBalancePaymentDebitReversal = 'stripe_balance_payment_debit_reversal';
    case StripeFee = 'stripe_fee';
    case StripeFxFee = 'stripe_fx_fee';
    case TaxFee = 'tax_fee';
    case TaxFund = 'tax_fund';
    case Topup = 'topup';
    case TopupReversal = 'topup_reversal';
    case Transfer = 'transfer';
    case TransferCancel = 'transfer_cancel';
    case TransferFailure = 'transfer_failure';
    case TransferRefund = 'transfer_refund';
}
