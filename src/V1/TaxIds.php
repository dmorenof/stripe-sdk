<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class TaxIds extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/tax_ids [operationId: GetTaxIds] */
    /**
     * List all tax IDs
     *
     * <p>Returns a list of tax IDs.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\TaxIds $params = null): \StripeSDK\Responses\V1\TaxIds\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TaxIds::class)->get($params);
    }

    /** POST /v1/tax_ids [operationId: PostTaxIds] */
    /**
     * Create a tax ID
     *
     * <p>Creates a new account or customer <code>tax_id</code> object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\TaxIds\Post $payload): \StripeSDK\DTOs\TaxId|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TaxIds::class)->post($payload);
    }

    /** DELETE /v1/tax_ids/{id} [operationId: DeleteTaxIdsId] */
    /**
     * Delete a tax ID
     *
     * <p>Deletes an existing account or customer <code>tax_id</code> object.</p>
     */
    public static function deleteById(string $id, ?\StripeSDK\Requests\V1\TaxIds\ById\Delete $payload = null): \StripeSDK\DTOs\Deleted\TaxId|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TaxIds::class)->deleteById($id, $payload);
    }

    /** GET /v1/tax_ids/{id} [operationId: GetTaxIdsId] */
    /**
     * Retrieve a tax ID
     *
     * <p>Retrieves an account or customer <code>tax_id</code> object.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\TaxIds\ById $params = null): \StripeSDK\DTOs\TaxId|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TaxIds::class)->getById($id, $params);
    }
}
