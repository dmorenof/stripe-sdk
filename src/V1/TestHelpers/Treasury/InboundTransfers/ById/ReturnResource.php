<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury\InboundTransfers\ById;

final class ReturnResource extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/inbound_transfers/{id}/return [operationId: PostTestHelpersTreasuryInboundTransfersIdReturn] */
    /**
     * Test mode: Return an InboundTransfer
     *
     * <p>Marks the test mode InboundTransfer object as returned and links the InboundTransfer to a ReceivedDebit. The InboundTransfer must already be in the <code>succeeded</code> state.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\TestHelpers\Treasury\InboundTransfers\ById\ReturnResource\Post $payload = null): \StripeSDK\DTOs\Treasury\InboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\InboundTransfers\ById\ReturnResource::class)->post($id, $payload);
    }
}
