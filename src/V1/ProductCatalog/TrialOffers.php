<?php

declare(strict_types=1);

namespace StripeSDK\V1\ProductCatalog;

final class TrialOffers extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/product_catalog/trial_offers [operationId: GetProductCatalogTrialOffers] */
    /**
     * List trial offers
     *
     * <p>Returns a list of trial offers.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\ProductCatalog\TrialOffers $params = null): \StripeSDK\Responses\V1\ProductCatalog\TrialOffers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ProductCatalog\TrialOffers::class)->get($params);
    }

    /** POST /v1/product_catalog/trial_offers [operationId: PostProductCatalogTrialOffers] */
    /**
     * Create a trial offer
     *
     * <p>Creates a trial offer.</p>
     */
    public static function post(\StripeSDK\Requests\V1\ProductCatalog\TrialOffers\Post $payload): \StripeSDK\DTOs\ProductCatalog\TrialOffer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ProductCatalog\TrialOffers::class)->post($payload);
    }

    /** GET /v1/product_catalog/trial_offers/{id} [operationId: GetProductCatalogTrialOffersId] */
    /**
     * Retrieve a trial offer
     *
     * <p>Retrieves the trial offer with the given ID.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\ProductCatalog\TrialOffers\ById $params = null): \StripeSDK\DTOs\ProductCatalog\TrialOffer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ProductCatalog\TrialOffers::class)->getById($id, $params);
    }

    /** POST /v1/product_catalog/trial_offers/{id} [operationId: PostProductCatalogTrialOffersId] */
    /**
     * Update a trial offer
     *
     * <p>Updates the specified trial offer by setting the values of the parameters passed. Any parameters not provided are left unchanged.</p>
     */
    public static function postById(string $id, ?\StripeSDK\Requests\V1\ProductCatalog\TrialOffers\ById\Post $payload = null): \StripeSDK\DTOs\ProductCatalog\TrialOffer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ProductCatalog\TrialOffers::class)->postById($id, $payload);
    }
}
