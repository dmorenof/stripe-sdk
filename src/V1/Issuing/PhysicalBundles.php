<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing;

final class PhysicalBundles extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/issuing/physical_bundles [operationId: GetIssuingPhysicalBundles] */
    /**
     * List all physical bundles
     *
     * <p>Returns a list of physical bundle objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Issuing\PhysicalBundles $params = null): \StripeSDK\Responses\V1\Issuing\PhysicalBundles\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\PhysicalBundles::class)->get($params);
    }

    /** GET /v1/issuing/physical_bundles/{physical_bundle} [operationId: GetIssuingPhysicalBundlesPhysicalBundle] */
    /**
     * Retrieve a physical bundle
     *
     * <p>Retrieves a physical bundle object.</p>
     */
    public static function getByPhysicalBundle(string $physical_bundle, ?\StripeSDK\GetParams\V1\Issuing\PhysicalBundles\ByPhysicalBundle $params = null): \StripeSDK\DTOs\Issuing\PhysicalBundle|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\PhysicalBundles::class)->getByPhysicalBundle($physical_bundle, $params);
    }
}
