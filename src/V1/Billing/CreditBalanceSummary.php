<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing;

final class CreditBalanceSummary extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/billing/credit_balance_summary [operationId: GetBillingCreditBalanceSummary] */
    /**
     * Retrieve the credit balance summary for a customer
     *
     * <p>Retrieves the credit balance summary for a customer.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Billing\CreditBalanceSummary $params): \StripeSDK\DTOs\Billing\CreditBalanceSummary|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\CreditBalanceSummary::class)->get($params);
    }
}
