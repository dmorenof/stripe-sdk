<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class TaxCodes extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/tax_codes [operationId: GetTaxCodes] */
    /**
     * List all tax codes
     *
     * <p>A list of <a href="https://stripe.com/docs/tax/tax-categories">all tax codes available</a> to add to Products in order to allow specific tax calculations.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\TaxCodes $params = null): \StripeSDK\Responses\V1\TaxCodes\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TaxCodes::class)->get($params);
    }

    /** GET /v1/tax_codes/{id} [operationId: GetTaxCodesId] */
    /**
     * Retrieve a tax code
     *
     * <p>Retrieves the details of an existing tax code. Supply the unique tax code ID and Stripe will return the corresponding tax code information.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\TaxCodes\ById $params = null): \StripeSDK\DTOs\TaxCode|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TaxCodes::class)->getById($id, $params);
    }
}
