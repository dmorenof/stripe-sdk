<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing;

final class Disputes extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/issuing/disputes [operationId: GetIssuingDisputes] */
    /**
     * List all disputes
     *
     * <p>Returns a list of Issuing <code>Dispute</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Issuing\Disputes $params = null): \StripeSDK\Responses\V1\Issuing\Disputes\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Disputes::class)->get($params);
    }

    /** POST /v1/issuing/disputes [operationId: PostIssuingDisputes] */
    /**
     * Create a dispute
     *
     * <p>Creates an Issuing <code>Dispute</code> object. Individual pieces of evidence within the <code>evidence</code> object are optional at this point. Stripe only validates that required evidence is present during submission. Refer to <a href="/docs/issuing/purchases/disputes#dispute-reasons-and-evidence">Dispute reasons and evidence</a> for more details about evidence requirements.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Issuing\Disputes\Post $payload = null): \StripeSDK\DTOs\Issuing\Dispute|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Disputes::class)->post($payload);
    }

    /** GET /v1/issuing/disputes/{dispute} [operationId: GetIssuingDisputesDispute] */
    /**
     * Retrieve a dispute
     *
     * <p>Retrieves an Issuing <code>Dispute</code> object.</p>
     */
    public static function getByDispute(string $dispute, ?\StripeSDK\GetParams\V1\Issuing\Disputes\ByDispute $params = null): \StripeSDK\DTOs\Issuing\Dispute|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Disputes::class)->getByDispute($dispute, $params);
    }

    /** POST /v1/issuing/disputes/{dispute} [operationId: PostIssuingDisputesDispute] */
    /**
     * Update a dispute
     *
     * <p>Updates the specified Issuing <code>Dispute</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Properties on the <code>evidence</code> object can be unset by passing in an empty string.</p>
     */
    public static function postByDispute(string $dispute, ?\StripeSDK\Requests\V1\Issuing\Disputes\ByDispute\Post $payload = null): \StripeSDK\DTOs\Issuing\Dispute|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Disputes::class)->postByDispute($dispute, $payload);
    }
}
