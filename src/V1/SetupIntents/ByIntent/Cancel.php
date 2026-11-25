<?php

declare(strict_types=1);

namespace StripeSDK\V1\SetupIntents\ByIntent;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/setup_intents/{intent}/cancel [operationId: PostSetupIntentsIntentCancel] */
    /**
     * Cancel a SetupIntent
     *
     * <p>You can cancel a SetupIntent object when it’s in one of these statuses: <code>requires_payment_method</code>, <code>requires_confirmation</code>, or <code>requires_action</code>. </p>
     *
     * <p>After you cancel it, setup is abandoned and any operations on the SetupIntent fail with an error. You can’t cancel the SetupIntent for a Checkout Session. <a href="/docs/api/checkout/sessions/expire">Expire the Checkout Session</a> instead.</p>
     */
    public static function post(string $intent, ?\StripeSDK\Requests\V1\SetupIntents\ByIntent\Cancel\Post $payload = null): \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SetupIntents\ByIntent\Cancel::class)->post($intent, $payload);
    }
}
