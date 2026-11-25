<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury;

final class OutboundTransfers extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/outbound_transfers/{outbound_transfer} [operationId: PostTestHelpersTreasuryOutboundTransfersOutboundTransfer] */
    /**
     * Test mode: Update an OutboundTransfer
     *
     * <p>Updates a test mode created OutboundTransfer with tracking details. The OutboundTransfer must not be cancelable, and cannot be in the <code>canceled</code> or <code>failed</code> states.</p>
     */
    public static function postByOutboundTransfer(string $outbound_transfer, \StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\Post $payload): \StripeSDK\DTOs\Treasury\OutboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\OutboundTransfers::class)->postByOutboundTransfer($outbound_transfer, $payload);
    }
}
