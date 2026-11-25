<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury;

final class CreditReversals extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/credit_reversals [operationId: GetTreasuryCreditReversals] */
    /**
     * List all CreditReversals
     *
     * <p>Returns a list of CreditReversals.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Treasury\CreditReversals $params): \StripeSDK\Responses\V1\Treasury\CreditReversals\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\CreditReversals::class)->get($params);
    }

    /** POST /v1/treasury/credit_reversals [operationId: PostTreasuryCreditReversals] */
    /**
     * Create a CreditReversal
     *
     * <p>Reverses a ReceivedCredit and creates a CreditReversal object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Treasury\CreditReversals\Post $payload): \StripeSDK\DTOs\Treasury\CreditReversal|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\CreditReversals::class)->post($payload);
    }

    /** GET /v1/treasury/credit_reversals/{credit_reversal} [operationId: GetTreasuryCreditReversalsCreditReversal] */
    /**
     * Retrieve a CreditReversal
     *
     * <p>Retrieves the details of an existing CreditReversal by passing the unique CreditReversal ID from either the CreditReversal creation request or CreditReversal list</p>
     */
    public static function getByCreditReversal(string $credit_reversal, ?\StripeSDK\GetParams\V1\Treasury\CreditReversals\ByCreditReversal $params = null): \StripeSDK\DTOs\Treasury\CreditReversal|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\CreditReversals::class)->getByCreditReversal($credit_reversal, $params);
    }
}
