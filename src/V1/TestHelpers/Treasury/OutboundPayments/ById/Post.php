<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury\OutboundPayments\ById;

final class Post extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/outbound_payments/{id}/post [operationId: PostTestHelpersTreasuryOutboundPaymentsIdPost] */
    /**
     * Test mode: Post an OutboundPayment
     *
     * <p>Transitions a test mode created OutboundPayment to the <code>posted</code> status. The OutboundPayment must already be in the <code>processing</code> state.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundPayments\ById\Post\Post $payload = null): \StripeSDK\DTOs\Treasury\OutboundPayment|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\OutboundPayments\ById\Post::class)->post($id, $payload);
    }
}
