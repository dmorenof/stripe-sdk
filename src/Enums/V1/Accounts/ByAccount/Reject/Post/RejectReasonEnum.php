<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\ByAccount\Reject\Post;

enum RejectReasonEnum: string
{
    case Credit = 'credit';
    case FraudNoIntentToFulfill = 'fraud_no_intent_to_fulfill';
    case FraudOther = 'fraud_other';
    case FraudPaymentMethodCasher = 'fraud_payment_method_casher';
    case FraudPaymentMethodTester = 'fraud_payment_method_tester';
    case Other = 'other';
    case TermsOfService = 'terms_of_service';
}
