<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class TaxIds extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/customers/{customer}/tax_ids [operationId: GetCustomersCustomerTaxIds] */
    /**
     * List all Customer tax IDs
     *
     * <p>Returns a list of tax IDs for a customer.</p>
     */
    public static function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\TaxIds $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\TaxIds\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\TaxIds::class)->get($customer, $params);
    }

    /** POST /v1/customers/{customer}/tax_ids [operationId: PostCustomersCustomerTaxIds] */
    /**
     * Create a Customer tax ID
     *
     * <p>Creates a new <code>tax_id</code> object for a customer.</p>
     */
    public static function post(string $customer, \StripeSDK\Requests\V1\Customers\ByCustomer\TaxIds\Post $payload): \StripeSDK\DTOs\TaxId|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\TaxIds::class)->post($customer, $payload);
    }

    /** DELETE /v1/customers/{customer}/tax_ids/{id} [operationId: DeleteCustomersCustomerTaxIdsId] */
    /**
     * Delete a Customer tax ID
     *
     * <p>Deletes an existing <code>tax_id</code> object.</p>
     */
    public static function deleteById(\StripeSDK\PathParams\V1\Customers\ByCustomer\TaxIds\ById $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\TaxIds\ById\Delete $payload = null): \StripeSDK\DTOs\Deleted\TaxId|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\TaxIds::class)->deleteById($identifier, $payload);
    }

    /** GET /v1/customers/{customer}/tax_ids/{id} [operationId: GetCustomersCustomerTaxIdsId] */
    /**
     * Retrieve a Customer tax ID
     *
     * <p>Retrieves the <code>tax_id</code> object with the given identifier.</p>
     */
    public static function getById(\StripeSDK\PathParams\V1\Customers\ByCustomer\TaxIds\ById $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\TaxIds\ById $params = null): \StripeSDK\DTOs\TaxId|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\TaxIds::class)->getById($identifier, $params);
    }
}
