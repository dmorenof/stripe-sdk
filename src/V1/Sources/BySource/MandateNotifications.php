<?php

declare(strict_types=1);

namespace StripeSDK\V1\Sources\BySource;

final class MandateNotifications extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/sources/{source}/mandate_notifications/{mandate_notification} [operationId: GetSourcesSourceMandateNotificationsMandateNotification] */
    /**
     * Retrieve a Source MandateNotification
     *
     * <p>Retrieves a new Source MandateNotification.</p>
     */
    public static function getByMandateNotification(\StripeSDK\PathParams\V1\Sources\BySource\MandateNotifications\ByMandateNotification $identifier, ?\StripeSDK\GetParams\V1\Sources\BySource\MandateNotifications\ByMandateNotification $params = null): \StripeSDK\DTOs\Source\MandateNotification|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Sources\BySource\MandateNotifications::class)->getByMandateNotification($identifier, $params);
    }
}
