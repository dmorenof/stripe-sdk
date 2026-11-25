<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class SetupIntents extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/setup_intents',
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
                'type' => '\\StripeSDK\\Responses\\V1\\SetupIntents\\GetStatus200',
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
     * List all SetupIntents
     *
     * <p>Returns a list of SetupIntents.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\SetupIntents $params = null): \StripeSDK\Responses\V1\SetupIntents\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\SetupIntents\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/setup_intents',
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
                'type' => '\\StripeSDK\\DTOs\\Setup\\Intent',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'allowed_payment_method_types' => 'nested',
            'automatic_payment_methods' => 'nested',
            'excluded_payment_method_types' => 'nested',
            'expand' => 'nested',
            'flow_directions' => 'nested',
            'mandate_data' => 'nested',
            'metadata' => 'deepObject',
            'payment_method_data' => 'nested',
            'payment_method_options' => 'nested',
            'single_use' => 'nested',
        ],
    ];

    /**
     * Create a SetupIntent
     *
     * <p>Creates a SetupIntent object.</p>
     *
     * <p>After you create the SetupIntent, attach a payment method and <a href="/docs/api/setup_intents/confirm">confirm</a>
     * it to collect any required permissions to charge the payment method later.</p>
     */
    public function post(?\StripeSDK\Requests\V1\SetupIntents\Post $payload = null): \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_INTENT = [
        'method' => 'GET',
        'path' => '/v1/setup_intents/{intent}',
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
                'type' => '\\StripeSDK\\DTOs\\Setup\\Intent',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'intent' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a SetupIntent
     *
     * <p>Retrieves the details of a SetupIntent that has previously been created. </p>
     *
     * <p>Client-side retrieval using a publishable key is allowed when the <code>client_secret</code> is provided in the query string. </p>
     *
     * <p>When retrieved with a publishable key, only a subset of properties will be returned. Please refer to the <a href="#setup_intent_object">SetupIntent</a> object reference for more details.</p>
     */
    public function getByIntent(string $intent, ?\StripeSDK\GetParams\V1\SetupIntents\ByIntent $params = null): \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_INTENT), path: ['intent' => $intent], parameters: $params);
        return $result;
    }

    private const array POST_BY_INTENT = [
        'method' => 'POST',
        'path' => '/v1/setup_intents/{intent}',
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
                'type' => '\\StripeSDK\\DTOs\\Setup\\Intent',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'intent' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'allowed_payment_method_types' => 'nested',
            'excluded_payment_method_types' => 'nested',
            'expand' => 'nested',
            'flow_directions' => 'nested',
            'metadata' => 'nested',
            'payment_method_data' => 'nested',
            'payment_method_options' => 'nested',
        ],
    ];

    /**
     * Update a SetupIntent
     *
     * <p>Updates a SetupIntent object.</p>
     */
    public function postByIntent(string $intent, ?\StripeSDK\Requests\V1\SetupIntents\ByIntent\Post $payload = null): \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_INTENT), path: ['intent' => $intent], body: $payload);
        return $result;
    }
}
