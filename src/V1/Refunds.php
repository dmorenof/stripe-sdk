<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Refunds extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/refunds [operationId: GetRefunds] */
    /**
     * List all refunds
     *
     * <p>Returns a list of all refunds you created. We return the refunds in sorted order, with the most recent refunds appearing first. The 10 most recent refunds are always available by default on the Charge object.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Refunds $params = null): \StripeSDK\Responses\V1\Refunds\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Refunds::class)->get($params);
    }

    /** POST /v1/refunds [operationId: PostRefunds] */
    /**
     * Create a refund
     *
     * <p>When you create a new refund, you must specify a Charge or a PaymentIntent object on which to create it.</p>
     *
     * <p>Creating a new refund will refund a charge that has previously been created but not yet refunded.
     * Funds will be refunded to the credit or debit card that was originally charged.</p>
     *
     * <p>You can optionally refund only part of a charge.
     * You can do so multiple times, until the entire charge has been refunded.</p>
     *
     * <p>Once entirely refunded, a charge can’t be refunded again.
     * This method will raise an error when called on an already-refunded charge,
     * or when trying to refund more money than is left on a charge.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Refunds\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Refunds::class)->post($payload);
    }

    /** GET /v1/refunds/{refund} [operationId: GetRefundsRefund] */
    /**
     * Retrieve a refund
     *
     * <p>Retrieves the details of an existing refund.</p>
     */
    public static function getByRefund(string $refund, ?\StripeSDK\GetParams\V1\Refunds\ByRefund $params = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Refunds::class)->getByRefund($refund, $params);
    }

    /** POST /v1/refunds/{refund} [operationId: PostRefundsRefund] */
    /**
     * Update a refund
     *
     * <p>Updates the refund that you specify by setting the values of the passed parameters. Any parameters that you don’t provide remain unchanged.</p>
     *
     * <p>This request only accepts <code>metadata</code> as an argument.</p>
     */
    public static function postByRefund(string $refund, ?\StripeSDK\Requests\V1\Refunds\ByRefund\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Refunds::class)->postByRefund($refund, $payload);
    }
}
