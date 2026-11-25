<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Transfers extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/transfers [operationId: GetTransfers] */
    /**
     * List all transfers
     *
     * <p>Returns a list of existing transfers sent to connected accounts. The transfers are returned in sorted order, with the most recently created transfers appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Transfers $params = null): \StripeSDK\Responses\V1\Transfers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Transfers::class)->get($params);
    }

    /** POST /v1/transfers [operationId: PostTransfers] */
    /**
     * Create a transfer
     *
     * <p>To send funds from your Stripe account to a connected account, you create a new transfer object. Your <a href="#balance">Stripe balance</a> must be able to cover the transfer amount, or you’ll receive an “Insufficient Funds” error.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Transfers\Post $payload): \StripeSDK\DTOs\Transfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Transfers::class)->post($payload);
    }

    /** GET /v1/transfers/{transfer} [operationId: GetTransfersTransfer] */
    /**
     * Retrieve a transfer
     *
     * <p>Retrieves the details of an existing transfer. Supply the unique transfer ID from either a transfer creation request or the transfer list, and Stripe will return the corresponding transfer information.</p>
     */
    public static function getByTransfer(string $transfer, ?\StripeSDK\GetParams\V1\Transfers\ByTransfer $params = null): \StripeSDK\DTOs\Transfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Transfers::class)->getByTransfer($transfer, $params);
    }

    /** POST /v1/transfers/{transfer} [operationId: PostTransfersTransfer] */
    /**
     * Update a transfer
     *
     * <p>Updates the specified transfer by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     *
     * <p>This request accepts only metadata as an argument.</p>
     */
    public static function postByTransfer(string $transfer, ?\StripeSDK\Requests\V1\Transfers\ByTransfer\Post $payload = null): \StripeSDK\DTOs\Transfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Transfers::class)->postByTransfer($transfer, $payload);
    }
}
