<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class SetupIntents extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/setup_intents [operationId: GetSetupIntents] */
    /**
     * List all SetupIntents
     *
     * <p>Returns a list of SetupIntents.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\SetupIntents $params = null): \StripeSDK\Responses\V1\SetupIntents\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SetupIntents::class)->get($params);
    }

    /** POST /v1/setup_intents [operationId: PostSetupIntents] */
    /**
     * Create a SetupIntent
     *
     * <p>Creates a SetupIntent object.</p>
     *
     * <p>After you create the SetupIntent, attach a payment method and <a href="/docs/api/setup_intents/confirm">confirm</a>
     * it to collect any required permissions to charge the payment method later.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\SetupIntents\Post $payload = null): \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SetupIntents::class)->post($payload);
    }

    /** GET /v1/setup_intents/{intent} [operationId: GetSetupIntentsIntent] */
    /**
     * Retrieve a SetupIntent
     *
     * <p>Retrieves the details of a SetupIntent that has previously been created. </p>
     *
     * <p>Client-side retrieval using a publishable key is allowed when the <code>client_secret</code> is provided in the query string. </p>
     *
     * <p>When retrieved with a publishable key, only a subset of properties will be returned. Please refer to the <a href="#setup_intent_object">SetupIntent</a> object reference for more details.</p>
     */
    public static function getByIntent(string $intent, ?\StripeSDK\GetParams\V1\SetupIntents\ByIntent $params = null): \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SetupIntents::class)->getByIntent($intent, $params);
    }

    /** POST /v1/setup_intents/{intent} [operationId: PostSetupIntentsIntent] */
    /**
     * Update a SetupIntent
     *
     * <p>Updates a SetupIntent object.</p>
     */
    public static function postByIntent(string $intent, ?\StripeSDK\Requests\V1\SetupIntents\ByIntent\Post $payload = null): \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SetupIntents::class)->postByIntent($intent, $payload);
    }
}
