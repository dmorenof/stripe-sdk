<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury;

final class InboundTransfers extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/inbound_transfers [operationId: GetTreasuryInboundTransfers] */
    /**
     * List all InboundTransfers
     *
     * <p>Returns a list of InboundTransfers sent from the specified FinancialAccount.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Treasury\InboundTransfers $params): \StripeSDK\Responses\V1\Treasury\InboundTransfers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\InboundTransfers::class)->get($params);
    }

    /** POST /v1/treasury/inbound_transfers [operationId: PostTreasuryInboundTransfers] */
    /**
     * Create an InboundTransfer
     *
     * <p>Creates an InboundTransfer.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Treasury\InboundTransfers\Post $payload): \StripeSDK\DTOs\Treasury\InboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\InboundTransfers::class)->post($payload);
    }

    /** GET /v1/treasury/inbound_transfers/{id} [operationId: GetTreasuryInboundTransfersId] */
    /**
     * Retrieve an InboundTransfer
     *
     * <p>Retrieves the details of an existing InboundTransfer.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Treasury\InboundTransfers\ById $params = null): \StripeSDK\DTOs\Treasury\InboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\InboundTransfers::class)->getById($id, $params);
    }
}
