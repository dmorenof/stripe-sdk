<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class ApplicationFees extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/application_fees [operationId: GetApplicationFees] */
    /**
     * List all application fees
     *
     * <p>Returns a list of application fees you’ve previously collected. The application fees are returned in sorted order, with the most recent fees appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\ApplicationFees $params = null): \StripeSDK\Responses\V1\ApplicationFees\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ApplicationFees::class)->get($params);
    }

    /** GET /v1/application_fees/{id} [operationId: GetApplicationFeesId] */
    /**
     * Retrieve an application fee
     *
     * <p>Retrieves the details of an application fee that your account has collected. The same information is returned when refunding the application fee.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\ApplicationFees\ById $params = null): \StripeSDK\DTOs\ApplicationFee|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ApplicationFees::class)->getById($id, $params);
    }
}
