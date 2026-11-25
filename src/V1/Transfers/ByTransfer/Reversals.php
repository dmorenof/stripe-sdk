<?php

declare(strict_types=1);

namespace StripeSDK\V1\Transfers\ByTransfer;

final class Reversals extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/transfers/{transfer}/reversals/{id} [operationId: GetTransfersTransferReversalsId] */
    /**
     * Retrieve a reversal
     *
     * <p>By default, you can see the 10 most recent reversals stored directly on the transfer object, but you can also retrieve details about a specific reversal stored on the transfer.</p>
     */
    public static function getById(\StripeSDK\PathParams\V1\Transfers\ByTransfer\Reversals\ById $identifier, ?\StripeSDK\GetParams\V1\Transfers\ByTransfer\Reversals\ById $params = null): \StripeSDK\DTOs\Transfer\Reversal|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Transfers\ByTransfer\Reversals::class)->getById($identifier, $params);
    }

    /** POST /v1/transfers/{transfer}/reversals/{id} [operationId: PostTransfersTransferReversalsId] */
    /**
     * Update a reversal
     *
     * <p>Updates the specified reversal by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     *
     * <p>This request only accepts metadata and description as arguments.</p>
     */
    public static function postById(\StripeSDK\PathParams\V1\Transfers\ByTransfer\Reversals\ById $identifier, ?\StripeSDK\Requests\V1\Transfers\ByTransfer\Reversals\ById\Post $payload = null): \StripeSDK\DTOs\Transfer\Reversal|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Transfers\ByTransfer\Reversals::class)->postById($identifier, $payload);
    }
}
