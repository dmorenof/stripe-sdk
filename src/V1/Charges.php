<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Charges extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/charges [operationId: GetCharges] */
    /**
     * List all charges
     *
     * <p>Returns a list of charges you’ve previously created. The charges are returned in sorted order, with the most recent charges appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Charges $params = null): \StripeSDK\Responses\V1\Charges\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges::class)->get($params);
    }

    /** POST /v1/charges [operationId: PostCharges] */
    /**
     * Create a charge
     *
     * <p>This method is deprecated and will be removed soon. If your integration uses it, you need to update it to use a different payment flow, such as <a href="/docs/payments/payment-intents">the Payment Intents API</a>.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Charges\Post $payload = null): \StripeSDK\DTOs\Charge|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges::class)->post($payload);
    }

    /** GET /v1/charges/{charge} [operationId: GetChargesCharge] */
    /**
     * Retrieve a charge
     *
     * <p>Retrieves the details of a charge that has previously been created. Supply the unique charge ID that was returned from your previous request, and Stripe will return the corresponding charge information. The same information is returned when creating or refunding the charge.</p>
     */
    public static function getByCharge(string $charge, ?\StripeSDK\GetParams\V1\Charges\ByCharge $params = null): \StripeSDK\DTOs\Charge|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges::class)->getByCharge($charge, $params);
    }

    /** POST /v1/charges/{charge} [operationId: PostChargesCharge] */
    /**
     * Update a charge
     *
     * <p>Updates the specified charge by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public static function postByCharge(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Post $payload = null): \StripeSDK\DTOs\Charge|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges::class)->postByCharge($charge, $payload);
    }
}
