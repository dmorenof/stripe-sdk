<?php

declare(strict_types=1);

namespace StripeSDK\V1\Climate;

final class Suppliers extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/climate/suppliers [operationId: GetClimateSuppliers] */
    /**
     * List suppliers
     *
     * <p>Lists all available Climate supplier objects.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Climate\Suppliers $params = null): \StripeSDK\Responses\V1\Climate\Suppliers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Climate\Suppliers::class)->get($params);
    }

    /** GET /v1/climate/suppliers/{supplier} [operationId: GetClimateSuppliersSupplier] */
    /**
     * Retrieve a supplier
     *
     * <p>Retrieves a Climate supplier object.</p>
     */
    public static function getBySupplier(string $supplier, ?\StripeSDK\GetParams\V1\Climate\Suppliers\BySupplier $params = null): \StripeSDK\DTOs\Climate\Supplier|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Climate\Suppliers::class)->getBySupplier($supplier, $params);
    }
}
