<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing;

final class Settlements extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/settlements [operationId: PostTestHelpersIssuingSettlements] */
    /**
     * Create a test-mode settlement
     *
     * <p>Allows the user to create an Issuing settlement.</p>
     */
    public static function post(\StripeSDK\Requests\V1\TestHelpers\Issuing\Settlements\Post $payload): \StripeSDK\DTOs\Issuing\Settlement|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Settlements::class)->post($payload);
    }
}
