<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury;

final class OutboundPayments extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/outbound_payments [operationId: GetTreasuryOutboundPayments] */
    /**
     * List all OutboundPayments
     *
     * <p>Returns a list of OutboundPayments sent from the specified FinancialAccount.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Treasury\OutboundPayments $params): \StripeSDK\Responses\V1\Treasury\OutboundPayments\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\OutboundPayments::class)->get($params);
    }

    /** POST /v1/treasury/outbound_payments [operationId: PostTreasuryOutboundPayments] */
    /**
     * Create an OutboundPayment
     *
     * <p>Creates an OutboundPayment.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Treasury\OutboundPayments\Post $payload): \StripeSDK\DTOs\Treasury\OutboundPayment|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\OutboundPayments::class)->post($payload);
    }

    /** GET /v1/treasury/outbound_payments/{id} [operationId: GetTreasuryOutboundPaymentsId] */
    /**
     * Retrieve an OutboundPayment
     *
     * <p>Retrieves the details of an existing OutboundPayment by passing the unique OutboundPayment ID from either the OutboundPayment creation request or OutboundPayment list.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Treasury\OutboundPayments\ById $params = null): \StripeSDK\DTOs\Treasury\OutboundPayment|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\OutboundPayments::class)->getById($id, $params);
    }
}
