<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Customers extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/customers',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Customers\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all customers
     *
     * <p>Returns a list of your customers. The customers are returned sorted by creation date, with the most recent customers appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Customers $params = null): \StripeSDK\Responses\V1\Customers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Customers\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/customers',
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
                'type' => '\\StripeSDK\\DTOs\\Customer',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'address' => 'nested',
            'business_name' => 'nested',
            'cash_balance' => 'nested',
            'expand' => 'nested',
            'individual_name' => 'nested',
            'invoice_settings' => 'nested',
            'metadata' => 'nested',
            'preferred_locales' => 'nested',
            'shipping' => 'nested',
            'tax' => 'nested',
            'tax_id_data' => 'nested',
        ],
    ];

    /**
     * Create a customer
     *
     * <p>Creates a new customer object.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Customers\Post $payload = null): \StripeSDK\DTOs\Customer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Customer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_CUSTOMER = [
        'method' => 'DELETE',
        'path' => '/v1/customers/{customer}',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\Customer',
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
    ];

    /**
     * Delete a customer
     *
     * <p>Permanently deletes a customer. It cannot be undone. Also immediately cancels any active subscriptions on the customer.</p>
     */
    public function deleteByCustomer(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Delete $payload = null): \StripeSDK\DTOs\Deleted\Customer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\Customer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_CUSTOMER), path: ['customer' => $customer], body: $payload);
        return $result;
    }

    private const array GET_BY_CUSTOMER = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Customers\\ByCustomer\\GetStatus200\\ByCustomerGetStatus200Response',
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
     * Retrieve a customer
     *
     * <p>Retrieves a Customer object.</p>
     */
    public function getByCustomer(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\GetStatus200\ByCustomerGetStatus200Response|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Customers\ByCustomer\GetStatus200\ByCustomerGetStatus200Response|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CUSTOMER), path: ['customer' => $customer], parameters: $params);
        return $result;
    }

    private const array POST_BY_CUSTOMER = [
        'method' => 'POST',
        'path' => '/v1/customers/{customer}',
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
                'type' => '\\StripeSDK\\DTOs\\Customer',
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
            'address' => 'nested',
            'bank_account' => 'nested',
            'business_name' => 'nested',
            'card' => 'nested',
            'cash_balance' => 'nested',
            'expand' => 'nested',
            'individual_name' => 'nested',
            'invoice_settings' => 'nested',
            'metadata' => 'nested',
            'preferred_locales' => 'nested',
            'shipping' => 'nested',
            'tax' => 'nested',
        ],
    ];

    /**
     * Update a customer
     *
     * <p>Updates the specified customer by setting the values of the parameters passed. Any parameters not provided are left unchanged. For example, if you pass the <strong>source</strong> parameter, that becomes the customer’s active source (such as a card) to be used for all charges in the future. When you update a customer to a new valid card source by passing the <strong>source</strong> parameter: for each of the customer’s current subscriptions, if the subscription bills automatically and is in the <code>past_due</code> state, then the latest open invoice for the subscription with automatic collection enabled is retried. This retry doesn’t count as an automatic retry, and doesn’t affect the next regularly scheduled payment for the invoice. Changing the <strong>default_source</strong> for a customer doesn’t trigger this behavior.</p>
     *
     * <p>This request accepts mostly the same arguments as the customer creation call.</p>
     */
    public function postByCustomer(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Post $payload = null): \StripeSDK\DTOs\Customer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Customer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_CUSTOMER), path: ['customer' => $customer], body: $payload);
        return $result;
    }
}
