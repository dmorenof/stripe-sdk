<?php

declare(strict_types=1);

namespace StripeSDK\V1\Disputes\ByDispute;

final class Close extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/disputes/{dispute}/close [operationId: PostDisputesDisputeClose] */
    /**
     * Close a dispute
     *
     * <p>Closing the dispute for a charge indicates that you do not have any evidence to submit and are essentially dismissing the dispute (accepting it), acknowledging it as lost.</p>
     *
     * <p>The status of the dispute will change from <code>needs_response</code> to <code>lost</code>. <em>Closing a dispute is irreversible</em>.</p>
     */
    public static function post(string $dispute, ?\StripeSDK\Requests\V1\Disputes\ByDispute\Close\Post $payload = null): \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Disputes\ByDispute\Close::class)->post($dispute, $payload);
    }
}
