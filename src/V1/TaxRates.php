<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class TaxRates extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/tax_rates [operationId: GetTaxRates] */
    /**
     * List all tax rates
     *
     * <p>Returns a list of your tax rates. Tax rates are returned sorted by creation date, with the most recently created tax rates appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\TaxRates $params = null): \StripeSDK\Responses\V1\TaxRates\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TaxRates::class)->get($params);
    }

    /** POST /v1/tax_rates [operationId: PostTaxRates] */
    /**
     * Create a tax rate
     *
     * <p>Creates a new tax rate.</p>
     */
    public static function post(\StripeSDK\Requests\V1\TaxRates\Post $payload): \StripeSDK\DTOs\TaxRate|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TaxRates::class)->post($payload);
    }

    /** GET /v1/tax_rates/{tax_rate} [operationId: GetTaxRatesTaxRate] */
    /**
     * Retrieve a tax rate
     *
     * <p>Retrieves a tax rate with the given ID</p>
     */
    public static function getByTaxRate(string $tax_rate, ?\StripeSDK\GetParams\V1\TaxRates\ByTaxRate $params = null): \StripeSDK\DTOs\TaxRate|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TaxRates::class)->getByTaxRate($tax_rate, $params);
    }

    /** POST /v1/tax_rates/{tax_rate} [operationId: PostTaxRatesTaxRate] */
    /**
     * Update a tax rate
     *
     * <p>Updates an existing tax rate.</p>
     */
    public static function postByTaxRate(string $tax_rate, ?\StripeSDK\Requests\V1\TaxRates\ByTaxRate\Post $payload = null): \StripeSDK\DTOs\TaxRate|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TaxRates::class)->postByTaxRate($tax_rate, $payload);
    }
}
