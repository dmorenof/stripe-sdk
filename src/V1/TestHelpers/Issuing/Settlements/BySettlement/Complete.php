<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Settlements\BySettlement;

final class Complete extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/settlements/{settlement}/complete [operationId: PostTestHelpersIssuingSettlementsSettlementComplete] */
    /**
     * Complete a test-mode settlement
     *
     * <p>Allows the user to mark an Issuing settlement as complete.</p>
     */
    public static function post(string $settlement, ?\StripeSDK\Requests\V1\TestHelpers\Issuing\Settlements\BySettlement\Complete\Post $payload = null): \StripeSDK\DTOs\Issuing\Settlement|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Settlements\BySettlement\Complete::class)->post($settlement, $payload);
    }
}
