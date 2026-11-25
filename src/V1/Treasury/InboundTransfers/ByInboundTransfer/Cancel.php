<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury\InboundTransfers\ByInboundTransfer;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/treasury/inbound_transfers/{inbound_transfer}/cancel [operationId: PostTreasuryInboundTransfersInboundTransferCancel] */
    /**
     * Cancel an InboundTransfer
     *
     * <p>Cancels an InboundTransfer.</p>
     */
    public static function post(string $inbound_transfer, ?\StripeSDK\Requests\V1\Treasury\InboundTransfers\ByInboundTransfer\Cancel\Post $payload = null): \StripeSDK\DTOs\Treasury\InboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\InboundTransfers\ByInboundTransfer\Cancel::class)->post($inbound_transfer, $payload);
    }
}
