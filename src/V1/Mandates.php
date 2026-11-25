<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Mandates extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/mandates/{mandate} [operationId: GetMandatesMandate] */
    /**
     * Retrieve a Mandate
     *
     * <p>Retrieves a Mandate object.</p>
     */
    public static function getByMandate(string $mandate, ?\StripeSDK\GetParams\V1\Mandates\ByMandate $params = null): \StripeSDK\DTOs\Mandate|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Mandates::class)->getByMandate($mandate, $params);
    }
}
