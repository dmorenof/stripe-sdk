<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury;

final class OutboundPayments extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/outbound_payments/{id} [operationId: PostTestHelpersTreasuryOutboundPaymentsId] */
    /**
     * Test mode: Update an OutboundPayment
     *
     * <p>Updates a test mode created OutboundPayment with tracking details. The OutboundPayment must not be cancelable, and cannot be in the <code>canceled</code> or <code>failed</code> states.</p>
     */
    public static function postById(string $id, \StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundPayments\ById\Post $payload): \StripeSDK\DTOs\Treasury\OutboundPayment|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\OutboundPayments::class)->postById($id, $payload);
    }
}
