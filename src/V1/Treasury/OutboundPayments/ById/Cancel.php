<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury\OutboundPayments\ById;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/treasury/outbound_payments/{id}/cancel [operationId: PostTreasuryOutboundPaymentsIdCancel] */
    /**
     * Cancel an OutboundPayment
     *
     * <p>Cancel an OutboundPayment.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Treasury\OutboundPayments\ById\Cancel\Post $payload = null): \StripeSDK\DTOs\Treasury\OutboundPayment|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\OutboundPayments\ById\Cancel::class)->post($id, $payload);
    }
}
