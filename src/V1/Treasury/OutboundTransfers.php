<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury;

final class OutboundTransfers extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/outbound_transfers [operationId: GetTreasuryOutboundTransfers] */
    /**
     * List all OutboundTransfers
     *
     * <p>Returns a list of OutboundTransfers sent from the specified FinancialAccount.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Treasury\OutboundTransfers $params): \StripeSDK\Responses\V1\Treasury\OutboundTransfers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\OutboundTransfers::class)->get($params);
    }

    /** POST /v1/treasury/outbound_transfers [operationId: PostTreasuryOutboundTransfers] */
    /**
     * Create an OutboundTransfer
     *
     * <p>Creates an OutboundTransfer.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Treasury\OutboundTransfers\Post $payload): \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\OutboundTransfers::class)->post($payload);
    }

    /** GET /v1/treasury/outbound_transfers/{outbound_transfer} [operationId: GetTreasuryOutboundTransfersOutboundTransfer] */
    /**
     * Retrieve an OutboundTransfer
     *
     * <p>Retrieves the details of an existing OutboundTransfer by passing the unique OutboundTransfer ID from either the OutboundTransfer creation request or OutboundTransfer list.</p>
     */
    public static function getByOutboundTransfer(string $outbound_transfer, ?\StripeSDK\GetParams\V1\Treasury\OutboundTransfers\ByOutboundTransfer $params = null): \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\OutboundTransfers::class)->getByOutboundTransfer($outbound_transfer, $params);
    }
}
