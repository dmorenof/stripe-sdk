<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign;

final class Reject extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/personalization_designs/{personalization_design}/reject [operationId: PostTestHelpersIssuingPersonalizationDesignsPersonalizationDesignReject] */
    /**
     * Reject a testmode personalization design
     *
     * <p>Updates the <code>status</code> of the specified testmode personalization design object to <code>rejected</code>.</p>
     */
    public static function post(string $personalization_design, \StripeSDK\Requests\V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Reject\Post $payload): \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Reject::class)->post($personalization_design, $payload);
    }
}
