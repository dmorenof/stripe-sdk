<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal;

final class Locations extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/terminal/locations [operationId: GetTerminalLocations] */
    /**
     * List all Locations
     *
     * <p>Returns a list of <code>Location</code> objects.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Terminal\Locations $params = null): \StripeSDK\Responses\V1\Terminal\Locations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Locations::class)->get($params);
    }

    /** POST /v1/terminal/locations [operationId: PostTerminalLocations] */
    /**
     * Create a Location
     *
     * <p>Creates a new <code>Location</code> object.
     * For further details, including which address fields are required in each country, see the <a href="/docs/terminal/fleet/locations">Manage locations</a> guide.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Terminal\Locations\Post $payload = null): \StripeSDK\DTOs\Terminal\Location|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Locations::class)->post($payload);
    }

    /** DELETE /v1/terminal/locations/{location} [operationId: DeleteTerminalLocationsLocation] */
    /**
     * Delete a Location
     *
     * <p>Deletes a <code>Location</code> object.</p>
     */
    public static function deleteByLocation(string $location, ?\StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Delete $payload = null): \StripeSDK\DTOs\DeletedTerminal\Location|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Locations::class)->deleteByLocation($location, $payload);
    }

    /** GET /v1/terminal/locations/{location} [operationId: GetTerminalLocationsLocation] */
    /**
     * Retrieve a Location
     *
     * <p>Retrieves a <code>Location</code> object.</p>
     */
    public static function getByLocation(string $location, ?\StripeSDK\GetParams\V1\Terminal\Locations\ByLocation $params = null): \StripeSDK\Responses\V1\Terminal\Locations\ByLocation\GetStatus200\ByLocationGetStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Locations::class)->getByLocation($location, $params);
    }

    /** POST /v1/terminal/locations/{location} [operationId: PostTerminalLocationsLocation] */
    /**
     * Update a Location
     *
     * <p>Updates a <code>Location</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public static function postByLocation(string $location, ?\StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post $payload = null): \StripeSDK\Responses\V1\Terminal\Locations\ByLocation\PostStatus200\ByLocationPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Locations::class)->postByLocation($location, $payload);
    }
}
