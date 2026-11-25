<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing\Disputes\ByDispute;

final class Submit extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/issuing/disputes/{dispute}/submit [operationId: PostIssuingDisputesDisputeSubmit] */
    /**
     * Submit a dispute
     *
     * <p>Submits an Issuing <code>Dispute</code> to the card network. Stripe validates that all evidence fields required for the dispute’s reason are present. For more details, see <a href="/docs/issuing/purchases/disputes#dispute-reasons-and-evidence">Dispute reasons and evidence</a>.</p>
     */
    public static function post(string $dispute, ?\StripeSDK\Requests\V1\Issuing\Disputes\ByDispute\Submit\Post $payload = null): \StripeSDK\DTOs\Issuing\Dispute|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Disputes\ByDispute\Submit::class)->post($dispute, $payload);
    }
}
