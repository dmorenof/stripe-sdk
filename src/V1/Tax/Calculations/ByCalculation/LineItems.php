<?php

declare(strict_types=1);

namespace StripeSDK\V1\Tax\Calculations\ByCalculation;

final class LineItems extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/tax/calculations/{calculation}/line_items [operationId: GetTaxCalculationsCalculationLineItems] */
    /**
     * Retrieve a Calculation's line items
     *
     * <p>Retrieves the line items of a tax calculation as a collection, if the calculation hasn’t expired.</p>
     */
    public static function get(string $calculation, ?\StripeSDK\GetParams\V1\Tax\Calculations\ByCalculation\LineItems $params = null): \StripeSDK\Responses\V1\Tax\Calculations\ByCalculation\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Calculations\ByCalculation\LineItems::class)->get($calculation, $params);
    }
}
