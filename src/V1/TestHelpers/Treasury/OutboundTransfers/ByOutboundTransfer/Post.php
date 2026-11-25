<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer;

final class Post extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/outbound_transfers/{outbound_transfer}/post [operationId: PostTestHelpersTreasuryOutboundTransfersOutboundTransferPost] */
    /**
     * Test mode: Post an OutboundTransfer
     *
     * <p>Transitions a test mode created OutboundTransfer to the <code>posted</code> status. The OutboundTransfer must already be in the <code>processing</code> state.</p>
     */
    public static function post(string $outbound_transfer, ?\StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\Post\Post $payload = null): \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\Post::class)->post($outbound_transfer, $payload);
    }
}
