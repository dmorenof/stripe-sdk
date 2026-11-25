<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury\InboundTransfers\ById;

final class Fail extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/inbound_transfers/{id}/fail [operationId: PostTestHelpersTreasuryInboundTransfersIdFail] */
    /**
     * Test mode: Fail an InboundTransfer
     *
     * <p>Transitions a test mode created InboundTransfer to the <code>failed</code> status. The InboundTransfer must already be in the <code>processing</code> state.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\TestHelpers\Treasury\InboundTransfers\ById\Fail\Post $payload = null): \StripeSDK\DTOs\Treasury\InboundTransfer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\InboundTransfers\ById\Fail::class)->post($id, $payload);
    }
}
