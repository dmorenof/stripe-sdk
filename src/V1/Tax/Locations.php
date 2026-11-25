<?php

declare(strict_types=1);

namespace StripeSDK\V1\Tax;

final class Locations extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/tax/locations [operationId: GetTaxLocations] */
    /**
     * List tax locations
     *
     * <p>Retrieve a list of all tax locations. Tax locations can represent the venues for services, tickets, or other product types.</p>
     *
     * <p>The response includes detailed information for each tax location, such as its address, type, and description.</p>
     *
     * <p>You can paginate through the list by using the <code>limit</code> parameter to control the number of results returned in each request.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Tax\Locations $params): \StripeSDK\Responses\V1\Tax\Locations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Locations::class)->get($params);
    }

    /** POST /v1/tax/locations [operationId: PostTaxLocations] */
    /**
     * Create a tax location
     *
     * <p>Create a tax location to use in calculating taxes for a service, ticket, or other type of product. The resulting object contains the ID, address, type, and description of the tax location.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Tax\Locations\Post $payload): \StripeSDK\DTOs\Tax\Location|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Locations::class)->post($payload);
    }

    /** GET /v1/tax/locations/{location} [operationId: GetTaxLocationsLocation] */
    /**
     * Retrieve a tax location
     *
     * <p>Fetch the details of a specific tax location using its unique identifier. Use a tax location to calculate taxes based on the location of the end product, such as a performance, instead of the customer address. For more details, check the <a href="https://docs.stripe.com/tax/tax-for-tickets/integration-guide">integration guide</a>.</p>
     */
    public static function getByLocation(string $location, ?\StripeSDK\GetParams\V1\Tax\Locations\ByLocation $params = null): \StripeSDK\DTOs\Tax\Location|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Locations::class)->getByLocation($location, $params);
    }
}
