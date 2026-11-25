<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury\InboundTransfers\ById;

final class Succeed extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/inbound_transfers/{id}/succeed [operationId: PostTestHelpersTreasuryInboundTransfersIdSucceed] */
    /**
     * Test mode: Succeed an InboundTransfer
     *
     * <p>Transitions a test mode created InboundTransfer to the <code>succeeded</code> status. The InboundTransfer must already be in the <code>processing</code> state.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\TestHelpers\Treasury\InboundTransfers\ById\Succeed\Post $payload = null): \StripeSDK\DTOs\Treasury\InboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\InboundTransfers\ById\Succeed::class)->post($id, $payload);
    }
}
