<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Subscriptions extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/subscriptions',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Subscriptions\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'automatic_tax' => 'nested',
            'created' => 'nested',
            'current_period_end' => 'nested',
            'current_period_start' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List subscriptions
     *
     * <p>By default, returns a list of subscriptions that have not been canceled. In order to list canceled subscriptions, specify <code>status=canceled</code>.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Subscriptions $params = null): \StripeSDK\Responses\V1\Subscriptions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Subscriptions\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/subscriptions',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'add_invoice_items' => 'nested',
            'application_fee_percent' => 'nested',
            'automatic_tax' => 'nested',
            'billing_cycle_anchor_config' => 'nested',
            'billing_mode' => 'nested',
            'billing_schedules' => 'nested',
            'billing_thresholds' => 'nested',
            'cancel_at' => 'nested',
            'default_tax_rates' => 'nested',
            'discounts' => 'nested',
            'expand' => 'nested',
            'invoice_settings' => 'nested',
            'items' => 'nested',
            'metadata' => 'nested',
            'on_behalf_of' => 'nested',
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
     * <p>Creates a new subscription on an existing customer. Each customer can have up to 500 active or scheduled subscriptions.</p>
     *
     * <p>When you create a subscription with <code>collection_method=charge_automatically</code>, the first invoice is finalized as part of the request.
     * The <code>payment_behavior</code> parameter determines the exact behavior of the initial payment.</p>
     *
     * <p>To start subscriptions where the first invoice always begins in a <code>draft</code> status, use <a href="/docs/billing/subscriptions/subscription-schedules#managing">subscription schedules</a> instead.
     * Schedules provide the flexibility to model more complex billing configurations that change over time.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Subscriptions\Post $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_SUBSCRIPTION_EXPOSED_ID = [
        'method' => 'DELETE',
        'path' => '/v1/subscriptions/{subscription_exposed_id}',
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
            'subscription_exposed_id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'cancellation_details' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Cancel a subscription
     *
     * <p>Cancels a customer’s subscription immediately. The customer won’t be charged again for the subscription. After it’s canceled, the subscription is largely immutable. You can still update its <a href="/metadata">metadata</a> and <code>cancellation_details</code>.</p>
     *
     * <p>Any pending invoice items that you’ve created are still charged at the end of the period, unless manually <a href="/api/invoiceitems/delete">deleted</a>. If you’ve set the subscription to cancel at the end of the period, any pending prorations are also left in place and collected at the end of the period. But if the subscription is set to cancel immediately, pending prorations are removed if <code>invoice_now</code> and <code>prorate</code> are both set to false.</p>
     *
     * <p>By default, upon subscription cancellation, Stripe stops automatic collection of all finalized invoices for the customer. This is intended to prevent unexpected payment attempts after the customer has canceled a subscription. However, you can resume automatic collection of the invoices manually after subscription cancellation to have us proceed. Or, you could check for unpaid invoices before allowing the customer to cancel the subscription at all.</p>
     */
    public function deleteBySubscriptionExposedId(string $subscription_exposed_id, ?\StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Delete $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_SUBSCRIPTION_EXPOSED_ID), path: ['subscription_exposed_id' => $subscription_exposed_id], body: $payload);
        return $result;
    }

    private const array GET_BY_SUBSCRIPTION_EXPOSED_ID = [
        'method' => 'GET',
        'path' => '/v1/subscriptions/{subscription_exposed_id}',
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
    public function getBySubscriptionExposedId(string $subscription_exposed_id, ?\StripeSDK\GetParams\V1\Subscriptions\BySubscriptionExposedId $params = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SUBSCRIPTION_EXPOSED_ID), path: ['subscription_exposed_id' => $subscription_exposed_id], parameters: $params);
        return $result;
    }

    private const array POST_BY_SUBSCRIPTION_EXPOSED_ID = [
        'method' => 'POST',
        'path' => '/v1/subscriptions/{subscription_exposed_id}',
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
            'subscription_exposed_id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'add_invoice_items' => 'nested',
            'application_fee_percent' => 'nested',
            'automatic_tax' => 'nested',
            'billing_cycle_anchor' => 'nested',
            'billing_schedules' => 'nested',
            'billing_thresholds' => 'nested',
            'cancel_at' => 'nested',
            'cancellation_details' => 'nested',
            'default_source' => 'nested',
            'default_tax_rates' => 'nested',
            'description' => 'nested',
            'discounts' => 'nested',
            'expand' => 'nested',
            'invoice_settings' => 'nested',
            'items' => 'nested',
            'metadata' => 'nested',
            'on_behalf_of' => 'nested',
            'pause_collection' => 'nested',
            'payment_settings' => 'nested',
            'pending_invoice_item_interval' => 'nested',
            'transfer_data' => 'nested',
            'trial_end' => 'nested',
            'trial_settings' => 'nested',
        ],
    ];

    /**
     * Update a subscription
     *
     * <p>Updates an existing subscription to match the specified parameters.
     * When changing prices or quantities, we optionally prorate the price we charge next month to make up for any price changes.
     * To preview how the proration is calculated, use the <a href="/docs/api/invoices/create_preview">create preview</a> endpoint.</p>
     *
     * <p>By default, we prorate subscription changes. For example, if a customer signs up on May 1 for a <currency>100</currency> price, they’ll be billed <currency>100</currency> immediately. If on May 15 they switch to a <currency>200</currency> price, then on June 1 they’ll be billed <currency>250</currency> (<currency>200</currency> for a renewal of her subscription, plus a <currency>50</currency> prorating adjustment for half of the previous month’s <currency>100</currency> difference). Similarly, a downgrade generates a credit that is applied to the next invoice. We also prorate when you make quantity changes. You can also <a href="/billing/scripts/stripe-authored/proration">use scripts to prorate your billing</a>. To learn more, see <a href="/billing/subscriptions/prorations">Prorations</a>.</p>
     *
     * <p>Switching prices does not normally change the billing date or generate an immediate charge unless:</p>
     *
     * <ul>
     * <li>The billing interval is changed (for example, from monthly to yearly).</li>
     * <li>The subscription moves from free to paid.</li>
     * <li>A trial starts or ends.</li>
     * </ul>
     *
     * <p>In these cases, we apply a credit for the unused time on the previous price, immediately charge the customer using the new price, and reset the billing date. Learn about how <a href="/docs/billing/subscriptions/upgrade-downgrade#immediate-payment">Stripe immediately attempts payment for subscription changes</a>.</p>
     *
     * <p>If you want to charge for an upgrade immediately, pass <code>proration_behavior</code> as <code>always_invoice</code> to create prorations, automatically invoice the customer for those proration adjustments, and attempt to collect payment. If you pass <code>create_prorations</code>, the prorations are created but not automatically invoiced. If you want to bill the customer for the prorations before the subscription’s renewal date, you need to manually <a href="/docs/api/invoices/create">invoice the customer</a>.</p>
     *
     * <p>If you don’t want to prorate, set the <code>proration_behavior</code> option to <code>none</code>. With this option, the customer is billed <currency>100</currency> on May 1 and <currency>200</currency> on June 1. Similarly, if you set <code>proration_behavior</code> to <code>none</code> when switching between different billing intervals (for example, from monthly to yearly), we don’t generate any credits for the old subscription’s unused time. We still reset the billing date and bill immediately for the new subscription.</p>
     *
     * <p>Updating the quantity on a subscription many times in an hour may result in <a href="/docs/rate-limits">rate limiting</a>. If you need to bill for a frequently changing quantity, consider integrating <a href="/docs/billing/subscriptions/usage-based">usage-based billing</a> instead.</p>
     */
    public function postBySubscriptionExposedId(string $subscription_exposed_id, ?\StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_SUBSCRIPTION_EXPOSED_ID), path: ['subscription_exposed_id' => $subscription_exposed_id], body: $payload);
        return $result;
    }
}
