<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Disputes extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/disputes [operationId: GetDisputes] */
    /**
     * List all disputes
     *
     * <p>Returns a list of your disputes.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Disputes $params = null): \StripeSDK\Responses\V1\Disputes\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Disputes::class)->get($params);
    }

    /** GET /v1/disputes/{dispute} [operationId: GetDisputesDispute] */
    /**
     * Retrieve a dispute
     *
     * <p>Retrieves the dispute with the given ID.</p>
     */
    public static function getByDispute(string $dispute, ?\StripeSDK\GetParams\V1\Disputes\ByDispute $params = null): \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Disputes::class)->getByDispute($dispute, $params);
    }

    /** POST /v1/disputes/{dispute} [operationId: PostDisputesDispute] */
    /**
     * Update a dispute
     *
     * <p>When you get a dispute, contacting your customer is always the best first step. If that doesn’t work, you can submit evidence to help us resolve the dispute in your favor. You can do this in your <a href="https://dashboard.stripe.com/disputes">dashboard</a>, but if you prefer, you can use the API to submit evidence programmatically.</p>
     *
     * <p>Depending on your dispute type, different evidence fields will give you a better chance of winning your dispute. To figure out which evidence fields to provide, see our <a href="/docs/disputes/categories">guide to dispute types</a>.</p>
     */
    public static function postByDispute(string $dispute, ?\StripeSDK\Requests\V1\Disputes\ByDispute\Post $payload = null): \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Disputes::class)->postByDispute($dispute, $payload);
    }
}
