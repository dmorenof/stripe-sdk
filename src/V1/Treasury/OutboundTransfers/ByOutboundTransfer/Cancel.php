<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury\OutboundTransfers\ByOutboundTransfer;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/treasury/outbound_transfers/{outbound_transfer}/cancel [operationId: PostTreasuryOutboundTransfersOutboundTransferCancel] */
    /**
     * Cancel an OutboundTransfer
     *
     * <p>An OutboundTransfer can be canceled if the funds have not yet been paid out.</p>
     */
    public static function post(string $outbound_transfer, ?\StripeSDK\Requests\V1\Treasury\OutboundTransfers\ByOutboundTransfer\Cancel\Post $payload = null): \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\OutboundTransfers\ByOutboundTransfer\Cancel::class)->post($outbound_transfer, $payload);
    }
}
