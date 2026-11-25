<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId;

final class Discount extends \StripeSDK\StripeAPISDK
{
    /** DELETE /v1/customers/{customer}/subscriptions/{subscription_exposed_id}/discount [operationId: DeleteCustomersCustomerSubscriptionsSubscriptionExposedIdDiscount] */
    /**
     * Delete a customer discount
     *
     * <p>Removes the currently applied discount on a customer.</p>
     */
    public static function delete(\StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount\Delete $payload = null): \StripeSDK\DTOs\Deleted\Discount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount::class)->delete($identifier, $payload);
    }

    /** GET /v1/customers/{customer}/subscriptions/{subscription_exposed_id}/discount [operationId: GetCustomersCustomerSubscriptionsSubscriptionExposedIdDiscount] */
    public static function get(\StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount $params = null): \StripeSDK\DTOs\Discount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount::class)->get($identifier, $params);
    }
}
