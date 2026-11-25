<?php

declare(strict_types=1);

namespace StripeSDK\V1\Transfers\ById;

final class Reversals extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/transfers/{id}/reversals [operationId: GetTransfersIdReversals] */
    /**
     * List all reversals
     *
     * <p>You can see a list of the reversals belonging to a specific transfer. Note that the 10 most recent reversals are always available by default on the transfer object. If you need more than those 10, you can use this API method and the <code>limit</code> and <code>starting_after</code> parameters to page through additional reversals.</p>
     */
    public static function get(string $id, ?\StripeSDK\GetParams\V1\Transfers\ById\Reversals $params = null): \StripeSDK\Responses\V1\Transfers\ById\Reversals\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Transfers\ById\Reversals::class)->get($id, $params);
    }

    /** POST /v1/transfers/{id}/reversals [operationId: PostTransfersIdReversals] */
    /**
     * Create a transfer reversal
     *
     * <p>When you create a new reversal, you must specify a transfer to create it on.</p>
     *
     * <p>When reversing transfers, you can optionally reverse part of the transfer. You can do so as many times as you wish until the entire transfer has been reversed.</p>
     *
     * <p>Once entirely reversed, a transfer can’t be reversed again. This method will return an error when called on an already-reversed transfer, or when trying to reverse more money than is left on a transfer.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Transfers\ById\Reversals\Post $payload = null): \StripeSDK\DTOs\Transfer\Reversal|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Transfers\ById\Reversals::class)->post($id, $payload);
    }
}
