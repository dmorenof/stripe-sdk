<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class Subscriptions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/customers/{customer}/subscriptions [operationId: GetCustomersCustomerSubscriptions] */
    /**
     * List active subscriptions
     *
     * <p>You can see a list of the customer’s active subscriptions. Note that the 10 most recent active subscriptions are always available by default on the customer object. If you need more than those 10, you can use the limit and starting_after parameters to page through additional subscriptions.</p>
     */
    public static function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Subscriptions $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Subscriptions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Subscriptions::class)->get($customer, $params);
    }

    /** POST /v1/customers/{customer}/subscriptions [operationId: PostCustomersCustomerSubscriptions] */
    /**
     * Create a subscription
     *
     * <p>Creates a new subscription on an existing customer.</p>
     */
    public static function post(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Subscriptions::class)->post($customer, $payload);
    }

    /** DELETE /v1/customers/{customer}/subscriptions/{subscription_exposed_id} [operationId: DeleteCustomersCustomerSubscriptionsSubscriptionExposedId] */
    /**
     * Cancel a subscription
     *
     * <p>Cancels a customer’s subscription. If you set the <code>at_period_end</code> parameter to <code>true</code>, the subscription will remain active until the end of the period, at which point it will be canceled and not renewed. Otherwise, with the default <code>false</code> value, the subscription is terminated immediately. In either case, the customer will not be charged again for the subscription.</p>
     *
     * <p>Note, however, that any pending invoice items that you’ve created will still be charged for at the end of the period, unless manually <a href="/api/invoiceitems/delete">deleted</a>. If you’ve set the subscription to cancel at the end of the period, any pending prorations will also be left in place and collected at the end of the period. But if the subscription is set to cancel immediately, pending prorations will be removed.</p>
     *
     * <p>By default, upon subscription cancellation, Stripe will stop automatic collection of all finalized invoices for the customer. This is intended to prevent unexpected payment attempts after the customer has canceled a subscription. However, you can resume automatic collection of the invoices manually after subscription cancellation to have us proceed. Or, you could check for unpaid invoices before allowing the customer to cancel the subscription at all.</p>
     */
    public static function deleteBySubscriptionExposedId(\StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Delete $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Subscriptions::class)->deleteBySubscriptionExposedId($identifier, $payload);
    }

    /** GET /v1/customers/{customer}/subscriptions/{subscription_exposed_id} [operationId: GetCustomersCustomerSubscriptionsSubscriptionExposedId] */
    /**
     * Retrieve a subscription
     *
     * <p>Retrieves the subscription with the given ID.</p>
     */
    public static function getBySubscriptionExposedId(\StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId $params = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Subscriptions::class)->getBySubscriptionExposedId($identifier, $params);
    }

    /** POST /v1/customers/{customer}/subscriptions/{subscription_exposed_id} [operationId: PostCustomersCustomerSubscriptionsSubscriptionExposedId] */
    /**
     * Update a subscription on a customer
     *
     * <p>Updates an existing subscription on a customer to match the specified parameters. When changing plans or quantities, we will optionally prorate the price we charge next month to make up for any price changes. To preview how the proration will be calculated, use the <a href="#upcoming_invoice">upcoming invoice</a> endpoint.</p>
     */
    public static function postBySubscriptionExposedId(\StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Subscriptions::class)->postBySubscriptionExposedId($identifier, $payload);
    }
}
