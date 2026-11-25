<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Checkout;

final class Sessions extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/checkout/sessions',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Checkout\\Sessions\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'customer_details' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all Checkout Sessions
     *
     * <p>Returns a list of Checkout Sessions.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Checkout\Sessions $params = null): \StripeSDK\Responses\V1\Checkout\Sessions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Checkout\Sessions\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/checkout/sessions',
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
                'type' => '\\StripeSDK\\DTOs\\Checkout\\Session',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'adaptive_pricing' => 'nested',
            'after_expiration' => 'nested',
            'allowed_payment_method_types' => 'nested',
            'automatic_tax' => 'nested',
            'branding_settings' => 'nested',
            'consent_collection' => 'nested',
            'custom_fields' => 'nested',
            'custom_text' => 'nested',
            'customer_update' => 'nested',
            'discounts' => 'nested',
            'excluded_payment_method_types' => 'nested',
            'expand' => 'nested',
            'invoice_creation' => 'nested',
            'line_items' => 'nested',
            'managed_payments' => 'nested',
            'metadata' => 'deepObject',
            'name_collection' => 'nested',
            'optional_items' => 'nested',
            'payment_intent_data' => 'nested',
            'payment_method_data' => 'nested',
            'payment_method_options' => 'nested',
            'permissions' => 'nested',
            'phone_number_collection' => 'nested',
            'saved_payment_method_options' => 'nested',
            'setup_intent_data' => 'nested',
            'shipping_address_collection' => 'nested',
            'shipping_options' => 'nested',
            'subscription_data' => 'nested',
            'tax_id_collection' => 'nested',
            'wallet_options' => 'nested',
        ],
    ];

    /**
     * Create a Checkout Session
     *
     * <p>Creates a Checkout Session object.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Checkout\Sessions\Post $payload = null): \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_SESSION = [
        'method' => 'GET',
        'path' => '/v1/checkout/sessions/{session}',
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
                'type' => '\\StripeSDK\\DTOs\\Checkout\\Session',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'session' => [
                'maxLength' => 66,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a Checkout Session
     *
     * <p>Retrieves a Checkout Session object.</p>
     */
    public function getBySession(string $session, ?\StripeSDK\GetParams\V1\Checkout\Sessions\BySession $params = null): \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SESSION), path: ['session' => $session], parameters: $params);
        return $result;
    }

    private const array POST_BY_SESSION = [
        'method' => 'POST',
        'path' => '/v1/checkout/sessions/{session}',
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
                'type' => '\\StripeSDK\\DTOs\\Checkout\\Session',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'session' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'collected_information' => 'nested',
            'expand' => 'nested',
            'line_items' => 'nested',
            'metadata' => 'nested',
            'shipping_options' => 'nested',
        ],
    ];

    /**
     * Update a Checkout Session
     *
     * <p>Updates a Checkout Session object.</p>
     *
     * <p>Related guide: <a href="/payments/advanced/dynamic-updates">Dynamically update a Checkout Session</a></p>
     */
    public function postBySession(string $session, ?\StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post $payload = null): \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_SESSION), path: ['session' => $session], body: $payload);
        return $result;
    }
}
