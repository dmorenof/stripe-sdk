<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Dispute;

enum LossReasonEnum: string
{
    case CardholderAuthenticationIssuerLiability = 'cardholder_authentication_issuer_liability';
    case Eci5TokenTransactionWithTavv = 'eci5_token_transaction_with_tavv';
    case ExcessDisputesInTimeframe = 'excess_disputes_in_timeframe';
    case HasNotMetTheMinimumDisputeAmountRequirements = 'has_not_met_the_minimum_dispute_amount_requirements';
    case InvalidDuplicateDispute = 'invalid_duplicate_dispute';
    case InvalidIncorrectAmountDispute = 'invalid_incorrect_amount_dispute';
    case InvalidNoAuthorization = 'invalid_no_authorization';
    case InvalidUseOfDisputes = 'invalid_use_of_disputes';
    case MerchandiseDeliveredOrShipped = 'merchandise_delivered_or_shipped';
    case MerchandiseOrServiceAsDescribed = 'merchandise_or_service_as_described';
    case NotCancelled = 'not_cancelled';
    case Other = 'other';
    case RefundIssued = 'refund_issued';
    case SubmittedBeyondAllowableTimeLimit = 'submitted_beyond_allowable_time_limit';
    case Transaction3dsRequired = 'transaction_3ds_required';
    case TransactionApprovedAfterPriorFraudDispute = 'transaction_approved_after_prior_fraud_dispute';
    case TransactionAuthorized = 'transaction_authorized';
    case TransactionElectronicallyRead = 'transaction_electronically_read';
    case TransactionQualifiesForVisaEasyPaymentService = 'transaction_qualifies_for_visa_easy_payment_service';
    case TransactionUnattended = 'transaction_unattended';
}
