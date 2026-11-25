<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Reporting\ReportRuns\Post\Parameters;

enum ReportingCategoryEnum: string
{
    case Advance = 'advance';
    case AdvanceFunding = 'advance_funding';
    case AnticipationRepayment = 'anticipation_repayment';
    case Charge = 'charge';
    case ChargeFailure = 'charge_failure';
    case ClimateOrderPurchase = 'climate_order_purchase';
    case ClimateOrderRefund = 'climate_order_refund';
    case ConnectCollectionTransfer = 'connect_collection_transfer';
    case ConnectReservedFunds = 'connect_reserved_funds';
    case Contribution = 'contribution';
    case Dispute = 'dispute';
    case DisputeReversal = 'dispute_reversal';
    case Fee = 'fee';
    case FinancingPaydown = 'financing_paydown';
    case FinancingPaydownReversal = 'financing_paydown_reversal';
    case FinancingPayout = 'financing_payout';
    case FinancingPayoutReversal = 'financing_payout_reversal';
    case IssuingAuthorizationHold = 'issuing_authorization_hold';
    case IssuingAuthorizationRelease = 'issuing_authorization_release';
    case IssuingDispute = 'issuing_dispute';
    case IssuingTransaction = 'issuing_transaction';
    case NetworkCost = 'network_cost';
    case OtherAdjustment = 'other_adjustment';
    case PartialCaptureReversal = 'partial_capture_reversal';
    case Payout = 'payout';
    case PayoutReversal = 'payout_reversal';
    case PlatformEarning = 'platform_earning';
    case PlatformEarningRefund = 'platform_earning_refund';
    case Refund = 'refund';
    case RefundFailure = 'refund_failure';
    case RiskReservedFunds = 'risk_reserved_funds';
    case Tax = 'tax';
    case Topup = 'topup';
    case TopupReversal = 'topup_reversal';
    case Transfer = 'transfer';
    case TransferReversal = 'transfer_reversal';
    case UnreconciledCustomerFunds = 'unreconciled_customer_funds';
}
