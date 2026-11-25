<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing\Alerts\ById;

final class Deactivate extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing/alerts/{id}/deactivate [operationId: PostBillingAlertsIdDeactivate] */
    /**
     * Deactivate a billing alert
     *
     * <p>Deactivates this alert, preventing it from triggering.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Billing\Alerts\ById\Deactivate\Post $payload = null): \StripeSDK\DTOs\Billing\Alert|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Alerts\ById\Deactivate::class)->post($id, $payload);
    }
}
