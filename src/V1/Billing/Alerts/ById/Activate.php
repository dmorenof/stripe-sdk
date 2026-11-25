<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing\Alerts\ById;

final class Activate extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing/alerts/{id}/activate [operationId: PostBillingAlertsIdActivate] */
    /**
     * Activate a billing alert
     *
     * <p>Reactivates this alert, allowing it to trigger again.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Billing\Alerts\ById\Activate\Post $payload = null): \StripeSDK\DTOs\Billing\Alert|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Alerts\ById\Activate::class)->post($id, $payload);
    }
}
