<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer;

final class ReturnResource extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/outbound_transfers/{outbound_transfer}/return [operationId: PostTestHelpersTreasuryOutboundTransfersOutboundTransferReturn] */
    /**
     * Test mode: Return an OutboundTransfer
     *
     * <p>Transitions a test mode created OutboundTransfer to the <code>returned</code> status. The OutboundTransfer must already be in the <code>processing</code> state.</p>
     */
    public static function post(string $outbound_transfer, ?\StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\ReturnResource\Post $payload = null): \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\ReturnResource::class)->post($outbound_transfer, $payload);
    }
}
