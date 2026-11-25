<?php

declare(strict_types=1);

namespace StripeSDK\V1\Charges\ByCharge;

final class Refunds extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/charges/{charge}/refunds [operationId: GetChargesChargeRefunds] */
    /**
     * List all refunds
     *
     * <p>You can see a list of the refunds belonging to a specific charge. Note that the 10 most recent refunds are always available by default on the charge object. If you need more than those 10, you can use this API method and the <code>limit</code> and <code>starting_after</code> parameters to page through additional refunds.</p>
     */
    public static function get(string $charge, ?\StripeSDK\GetParams\V1\Charges\ByCharge\Refunds $params = null): \StripeSDK\Responses\V1\Charges\ByCharge\Refunds\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges\ByCharge\Refunds::class)->get($charge, $params);
    }

    /** POST /v1/charges/{charge}/refunds [operationId: PostChargesChargeRefunds] */
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
    public static function post(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Refunds\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges\ByCharge\Refunds::class)->post($charge, $payload);
    }

    /** GET /v1/charges/{charge}/refunds/{refund} [operationId: GetChargesChargeRefundsRefund] */
    /**
     * <p>Retrieves the details of an existing refund.</p>
     */
    public static function getByRefund(\StripeSDK\PathParams\V1\Charges\ByCharge\Refunds\ByRefund $identifier, ?\StripeSDK\GetParams\V1\Charges\ByCharge\Refunds\ByRefund $params = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges\ByCharge\Refunds::class)->getByRefund($identifier, $params);
    }

    /** POST /v1/charges/{charge}/refunds/{refund} [operationId: PostChargesChargeRefundsRefund] */
    /**
     * <p>Update a specified refund.</p>
     */
    public static function postByRefund(\StripeSDK\PathParams\V1\Charges\ByCharge\Refunds\ByRefund $identifier, ?\StripeSDK\Requests\V1\Charges\ByCharge\Refunds\ByRefund\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges\ByCharge\Refunds::class)->postByRefund($identifier, $payload);
    }
}
