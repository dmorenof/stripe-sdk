<?php

declare(strict_types=1);

namespace StripeSDK\V1\Tax;

final class Registrations extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/tax/registrations [operationId: GetTaxRegistrations] */
    /**
     * List registrations
     *
     * <p>Returns a list of Tax <code>Registration</code> objects.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Tax\Registrations $params = null): \StripeSDK\Responses\V1\Tax\Registrations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Registrations::class)->get($params);
    }

    /** POST /v1/tax/registrations [operationId: PostTaxRegistrations] */
    /**
     * Create a registration
     *
     * <p>Creates a new Tax <code>Registration</code> object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Tax\Registrations\Post $payload): \StripeSDK\DTOs\Tax\Registration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Registrations::class)->post($payload);
    }

    /** GET /v1/tax/registrations/{id} [operationId: GetTaxRegistrationsId] */
    /**
     * Retrieve a registration
     *
     * <p>Returns a Tax <code>Registration</code> object.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Tax\Registrations\ById $params = null): \StripeSDK\DTOs\Tax\Registration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Registrations::class)->getById($id, $params);
    }

    /** POST /v1/tax/registrations/{id} [operationId: PostTaxRegistrationsId] */
    /**
     * Update a registration
     *
     * <p>Updates an existing Tax <code>Registration</code> object.</p>
     *
     * <p>A registration cannot be deleted after it has been created. If you wish to end a registration you may do so by setting <code>expires_at</code>.</p>
     */
    public static function postById(string $id, ?\StripeSDK\Requests\V1\Tax\Registrations\ById\Post $payload = null): \StripeSDK\DTOs\Tax\Registration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Registrations::class)->postById($id, $payload);
    }
}
