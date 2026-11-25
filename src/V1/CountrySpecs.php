<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class CountrySpecs extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/country_specs [operationId: GetCountrySpecs] */
    /**
     * List Country Specs
     *
     * <p>Lists all Country Spec objects available in the API.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\CountrySpecs $params = null): \StripeSDK\Responses\V1\CountrySpecs\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\CountrySpecs::class)->get($params);
    }

    /** GET /v1/country_specs/{country} [operationId: GetCountrySpecsCountry] */
    /**
     * Retrieve a Country Spec
     *
     * <p>Returns a Country Spec for a given Country code.</p>
     */
    public static function getByCountry(string $country, ?\StripeSDK\GetParams\V1\CountrySpecs\ByCountry $params = null): \StripeSDK\DTOs\CountrySpec|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\CountrySpecs::class)->getByCountry($country, $params);
    }
}
