<?php

declare(strict_types=1);

namespace StripeSDK\V1\Subscriptions\BySubscriptionExposedId;

final class Discount extends \StripeSDK\StripeAPISDK
{
    /** DELETE /v1/subscriptions/{subscription_exposed_id}/discount [operationId: DeleteSubscriptionsSubscriptionExposedIdDiscount] */
    /**
     * Delete a subscription discount
     *
     * <p>Removes the currently applied discount on a subscription.</p>
     */
    public static function delete(string $subscription_exposed_id, ?\StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Discount\Delete $payload = null): \StripeSDK\DTOs\Deleted\Discount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Subscriptions\BySubscriptionExposedId\Discount::class)->delete($subscription_exposed_id, $payload);
    }
}
