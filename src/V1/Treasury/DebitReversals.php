<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury;

final class DebitReversals extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/debit_reversals [operationId: GetTreasuryDebitReversals] */
    /**
     * List all DebitReversals
     *
     * <p>Returns a list of DebitReversals.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Treasury\DebitReversals $params): \StripeSDK\Responses\V1\Treasury\DebitReversals\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\DebitReversals::class)->get($params);
    }

    /** POST /v1/treasury/debit_reversals [operationId: PostTreasuryDebitReversals] */
    /**
     * Create a DebitReversal
     *
     * <p>Reverses a ReceivedDebit and creates a DebitReversal object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Treasury\DebitReversals\Post $payload): \StripeSDK\DTOs\Treasury\DebitReversal|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\DebitReversals::class)->post($payload);
    }

    /** GET /v1/treasury/debit_reversals/{debit_reversal} [operationId: GetTreasuryDebitReversalsDebitReversal] */
    /**
     * Retrieve a DebitReversal
     *
     * <p>Retrieves a DebitReversal object.</p>
     */
    public static function getByDebitReversal(string $debit_reversal, ?\StripeSDK\GetParams\V1\Treasury\DebitReversals\ByDebitReversal $params = null): \StripeSDK\DTOs\Treasury\DebitReversal|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\DebitReversals::class)->getByDebitReversal($debit_reversal, $params);
    }
}
