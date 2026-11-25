<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Customers\ByCustomer;

final class Subscriptions extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/subscriptions',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\Responses\\V1\\Customers\\ByCustomer\\Subscriptions\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List active subscriptions
     *
     * <p>You can see a list of the customer’s active subscriptions. Note that the 10 most recent active subscriptions are always available by default on the customer object. If you need more than those 10, you can use the limit and starting_after parameters to page through additional subscriptions.</p>
     */
    public function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Subscriptions $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Subscriptions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Customers\ByCustomer\Subscriptions\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['customer' => $customer], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/customers/{customer}/subscriptions',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Subscription',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'add_invoice_items' => 'nested',
            'application_fee_percent' => 'nested',
            'automatic_tax' => 'nested',
            'billing_thresholds' => 'nested',
            'cancel_at' => 'nested',
            'default_tax_rates' => 'nested',
            'discounts' => 'nested',
            'expand' => 'nested',
            'invoice_settings' => 'nested',
            'items' => 'nested',
            'metadata' => 'nested',
            'payment_settings' => 'nested',
            'pending_invoice_item_interval' => 'nested',
            'transfer_data' => 'nested',
            'trial_end' => 'nested',
            'trial_settings' => 'nested',
        ],
    ];

    /**
     * Create a subscription
     *
     * <p>Creates a new subscription on an existing customer.</p>
     */
    public function post(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['customer' => $customer], body: $payload);
        return $result;
    }

    private const array DELETE_BY_SUBSCRIPTION_EXPOSED_ID = [
        'method' => 'DELETE',
        'path' => '/v1/customers/{customer}/subscriptions/{subscription_exposed_id}',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Subscription',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
            'subscription_exposed_id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Cancel a subscription
     *
     * <p>Cancels a customer’s subscription. If you set the <code>at_period_end</code> parameter to <code>true</code>, the subscription will remain active until the end of the period, at which point it will be canceled and not renewed. Otherwise, with the default <code>false</code> value, the subscription is terminated immediately. In either case, the customer will not be charged again for the subscription.</p>
     *
     * <p>Note, however, that any pending invoice items that you’ve created will still be charged for at the end of the period, unless manually <a href="/api/invoiceitems/delete">deleted</a>. If you’ve set the subscription to cancel at the end of the period, any pending prorations will also be left in place and collected at the end of the period. But if the subscription is set to cancel immediately, pending prorations will be removed.</p>
     *
     * <p>By default, upon subscription cancellation, Stripe will stop automatic collection of all finalized invoices for the customer. This is intended to prevent unexpected payment attempts after the customer has canceled a subscription. However, you can resume automatic collection of the invoices manually after subscription cancellation to have us proceed. Or, you could check for unpaid invoices before allowing the customer to cancel the subscription at all.</p>
     */
    public function deleteBySubscriptionExposedId(\StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Delete $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_SUBSCRIPTION_EXPOSED_ID), path: $identifier, body: $payload);
        return $result;
    }

    private const array GET_BY_SUBSCRIPTION_EXPOSED_ID = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/subscriptions/{subscription_exposed_id}',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Subscription',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
            'subscription_exposed_id' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a subscription
     *
     * <p>Retrieves the subscription with the given ID.</p>
     */
    public function getBySubscriptionExposedId(\StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId $params = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SUBSCRIPTION_EXPOSED_ID), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST_BY_SUBSCRIPTION_EXPOSED_ID = [
        'method' => 'POST',
        'path' => '/v1/customers/{customer}/subscriptions/{subscription_exposed_id}',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Subscription',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
            'subscription_exposed_id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'add_invoice_items' => 'nested',
            'application_fee_percent' => 'nested',
            'automatic_tax' => 'nested',
            'billing_thresholds' => 'nested',
            'cancel_at' => 'nested',
            'cancellation_details' => 'nested',
            'default_source' => 'nested',
            'default_tax_rates' => 'nested',
            'discounts' => 'nested',
            'expand' => 'nested',
            'invoice_settings' => 'nested',
            'items' => 'nested',
            'metadata' => 'nested',
            'pause_collection' => 'nested',
            'payment_settings' => 'nested',
            'pending_invoice_item_interval' => 'nested',
            'transfer_data' => 'nested',
            'trial_end' => 'nested',
            'trial_settings' => 'nested',
        ],
    ];

    /**
     * Update a subscription on a customer
     *
     * <p>Updates an existing subscription on a customer to match the specified parameters. When changing plans or quantities, we will optionally prorate the price we charge next month to make up for any price changes. To preview how the proration will be calculated, use the <a href="#upcoming_invoice">upcoming invoice</a> endpoint.</p>
     */
    public function postBySubscriptionExposedId(\StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_SUBSCRIPTION_EXPOSED_ID), path: $identifier, body: $payload);
        return $result;
    }
}
