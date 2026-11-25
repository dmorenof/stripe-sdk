<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing;

final class PersonalizationDesigns extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/issuing/personalization_designs [operationId: GetIssuingPersonalizationDesigns] */
    /**
     * List all personalization designs
     *
     * <p>Returns a list of personalization design objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Issuing\PersonalizationDesigns $params = null): \StripeSDK\Responses\V1\Issuing\PersonalizationDesigns\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\PersonalizationDesigns::class)->get($params);
    }

    /** POST /v1/issuing/personalization_designs [operationId: PostIssuingPersonalizationDesigns] */
    /**
     * Create a personalization design
     *
     * <p>Creates a personalization design object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post $payload): \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\PersonalizationDesigns::class)->post($payload);
    }

    /** GET /v1/issuing/personalization_designs/{personalization_design} [operationId: GetIssuingPersonalizationDesignsPersonalizationDesign] */
    /**
     * Retrieve a personalization design
     *
     * <p>Retrieves a personalization design object.</p>
     */
    public static function getByPersonalizationDesign(string $personalization_design, ?\StripeSDK\GetParams\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign $params = null): \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\PersonalizationDesigns::class)->getByPersonalizationDesign($personalization_design, $params);
    }

    /** POST /v1/issuing/personalization_designs/{personalization_design} [operationId: PostIssuingPersonalizationDesignsPersonalizationDesign] */
    /**
     * Update a personalization design
     *
     * <p>Updates a card personalization object.</p>
     */
    public static function postByPersonalizationDesign(string $personalization_design, ?\StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Post $payload = null): \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\PersonalizationDesigns::class)->postByPersonalizationDesign($personalization_design, $payload);
    }
}
