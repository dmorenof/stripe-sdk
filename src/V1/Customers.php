<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Customers extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/customers [operationId: GetCustomers] */
    /**
     * List all customers
     *
     * <p>Returns a list of your customers. The customers are returned sorted by creation date, with the most recent customers appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Customers $params = null): \StripeSDK\Responses\V1\Customers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers::class)->get($params);
    }

    /** POST /v1/customers [operationId: PostCustomers] */
    /**
     * Create a customer
     *
     * <p>Creates a new customer object.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Customers\Post $payload = null): \StripeSDK\DTOs\Customer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers::class)->post($payload);
    }

    /** DELETE /v1/customers/{customer} [operationId: DeleteCustomersCustomer] */
    /**
     * Delete a customer
     *
     * <p>Permanently deletes a customer. It cannot be undone. Also immediately cancels any active subscriptions on the customer.</p>
     */
    public static function deleteByCustomer(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Delete $payload = null): \StripeSDK\DTOs\Deleted\Customer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers::class)->deleteByCustomer($customer, $payload);
    }

    /** GET /v1/customers/{customer} [operationId: GetCustomersCustomer] */
    /**
     * Retrieve a customer
     *
     * <p>Retrieves a Customer object.</p>
     */
    public static function getByCustomer(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\GetStatus200\ByCustomerGetStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers::class)->getByCustomer($customer, $params);
    }

    /** POST /v1/customers/{customer} [operationId: PostCustomersCustomer] */
    /**
     * Update a customer
     *
     * <p>Updates the specified customer by setting the values of the parameters passed. Any parameters not provided are left unchanged. For example, if you pass the <strong>source</strong> parameter, that becomes the customer’s active source (such as a card) to be used for all charges in the future. When you update a customer to a new valid card source by passing the <strong>source</strong> parameter: for each of the customer’s current subscriptions, if the subscription bills automatically and is in the <code>past_due</code> state, then the latest open invoice for the subscription with automatic collection enabled is retried. This retry doesn’t count as an automatic retry, and doesn’t affect the next regularly scheduled payment for the invoice. Changing the <strong>default_source</strong> for a customer doesn’t trigger this behavior.</p>
     *
     * <p>This request accepts mostly the same arguments as the customer creation call.</p>
     */
    public static function postByCustomer(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Post $payload = null): \StripeSDK\DTOs\Customer|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers::class)->postByCustomer($customer, $payload);
    }
}
