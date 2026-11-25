<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class WebhookEndpoints extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/webhook_endpoints',
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
                'type' => '\\StripeSDK\\Responses\\V1\\WebhookEndpoints\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all webhook endpoints
     *
     * <p>Returns a list of your webhook endpoints.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\WebhookEndpoints $params = null): \StripeSDK\Responses\V1\WebhookEndpoints\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\WebhookEndpoints\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/webhook_endpoints',
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
                'type' => '\\StripeSDK\\DTOs\\WebhookEndpoint',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'description' => 'nested',
            'enabled_events' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Create a webhook endpoint
     *
     * <p>A webhook endpoint must have a <code>url</code> and a list of <code>enabled_events</code>. You may optionally specify the Boolean <code>connect</code> parameter. If set to true, then a Connect webhook endpoint that notifies the specified <code>url</code> about events from all connected accounts is created; otherwise an account webhook endpoint that notifies the specified <code>url</code> only about events from your account is created. You can also create webhook endpoints in the <a href="https://dashboard.stripe.com/account/webhooks">webhooks settings</a> section of the Dashboard.</p>
     */
    public function post(\StripeSDK\Requests\V1\WebhookEndpoints\Post $payload): \StripeSDK\DTOs\WebhookEndpoint|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\WebhookEndpoint|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_WEBHOOK_ENDPOINT = [
        'method' => 'DELETE',
        'path' => '/v1/webhook_endpoints/{webhook_endpoint}',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\WebhookEndpoint',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'webhook_endpoint' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a webhook endpoint
     *
     * <p>You can also delete webhook endpoints via the <a href="https://dashboard.stripe.com/account/webhooks">webhook endpoint management</a> page of the Stripe dashboard.</p>
     */
    public function deleteByWebhookEndpoint(string $webhook_endpoint, ?\StripeSDK\Requests\V1\WebhookEndpoints\ByWebhookEndpoint\Delete $payload = null): \StripeSDK\DTOs\Deleted\WebhookEndpoint|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\WebhookEndpoint|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_WEBHOOK_ENDPOINT), path: ['webhook_endpoint' => $webhook_endpoint], body: $payload);
        return $result;
    }

    private const array GET_BY_WEBHOOK_ENDPOINT = [
        'method' => 'GET',
        'path' => '/v1/webhook_endpoints/{webhook_endpoint}',
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
                'type' => '\\StripeSDK\\DTOs\\WebhookEndpoint',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'webhook_endpoint' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a webhook endpoint
     *
     * <p>Retrieves the webhook endpoint with the given ID.</p>
     */
    public function getByWebhookEndpoint(string $webhook_endpoint, ?\StripeSDK\GetParams\V1\WebhookEndpoints\ByWebhookEndpoint $params = null): \StripeSDK\DTOs\WebhookEndpoint|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\WebhookEndpoint|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_WEBHOOK_ENDPOINT), path: ['webhook_endpoint' => $webhook_endpoint], parameters: $params);
        return $result;
    }

    private const array POST_BY_WEBHOOK_ENDPOINT = [
        'method' => 'POST',
        'path' => '/v1/webhook_endpoints/{webhook_endpoint}',
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
                'type' => '\\StripeSDK\\DTOs\\WebhookEndpoint',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'webhook_endpoint' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'description' => 'nested',
            'enabled_events' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Update a webhook endpoint
     *
     * <p>Updates the webhook endpoint. You may edit the <code>url</code>, the list of <code>enabled_events</code>, and the status of your endpoint.</p>
     */
    public function postByWebhookEndpoint(string $webhook_endpoint, ?\StripeSDK\Requests\V1\WebhookEndpoints\ByWebhookEndpoint\Post $payload = null): \StripeSDK\DTOs\WebhookEndpoint|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\WebhookEndpoint|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_WEBHOOK_ENDPOINT), path: ['webhook_endpoint' => $webhook_endpoint], body: $payload);
        return $result;
    }
}
