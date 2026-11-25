<?php

declare(strict_types=1);

namespace StripeSDK\V1\Tax;

final class Calculations extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/tax/calculations [operationId: PostTaxCalculations] */
    /**
     * Create a Calculation
     *
     * <p>Calculates tax based on the input and returns a Tax <code>Calculation</code> object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Tax\Calculations\Post $payload): \StripeSDK\DTOs\Tax\Calculation|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Calculations::class)->post($payload);
    }

    /** GET /v1/tax/calculations/{calculation} [operationId: GetTaxCalculationsCalculation] */
    /**
     * Retrieve a Calculation
     *
     * <p>Retrieves a Tax <code>Calculation</code> object, if the calculation hasn’t expired.</p>
     */
    public static function getByCalculation(string $calculation, ?\StripeSDK\GetParams\V1\Tax\Calculations\ByCalculation $params = null): \StripeSDK\DTOs\Tax\Calculation|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Calculations::class)->getByCalculation($calculation, $params);
    }
}
