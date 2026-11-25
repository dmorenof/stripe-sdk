<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury\OutboundPayments\ById;

final class Fail extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/outbound_payments/{id}/fail [operationId: PostTestHelpersTreasuryOutboundPaymentsIdFail] */
    /**
     * Test mode: Fail an OutboundPayment
     *
     * <p>Transitions a test mode created OutboundPayment to the <code>failed</code> status. The OutboundPayment must already be in the <code>processing</code> state.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundPayments\ById\Fail\Post $payload = null): \StripeSDK\DTOs\Treasury\OutboundPayment|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\OutboundPayments\ById\Fail::class)->post($id, $payload);
    }
}
