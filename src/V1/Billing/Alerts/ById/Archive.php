<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing\Alerts\ById;

final class Archive extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing/alerts/{id}/archive [operationId: PostBillingAlertsIdArchive] */
    /**
     * Archive a billing alert
     *
     * <p>Archives this alert, removing it from the list view and APIs. This is non-reversible.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Billing\Alerts\ById\Archive\Post $payload = null): \StripeSDK\DTOs\Billing\Alert|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Alerts\ById\Archive::class)->post($id, $payload);
    }
}
