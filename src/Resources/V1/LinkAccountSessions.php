<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class LinkAccountSessions extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/link_account_sessions',
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
                'type' => '\\StripeSDK\\DTOs\\FinancialConnections\\Session',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'account_holder' => 'nested',
            'expand' => 'nested',
            'filters' => 'nested',
            'limits' => 'nested',
            'manual_entry' => 'nested',
            'permissions' => 'nested',
            'prefetch' => 'nested',
        ],
    ];

    /**
     * Create a Session
     *
     * <p>To launch the Financial Connections authorization flow, create a <code>Session</code>. The session’s <code>client_secret</code> can be used to launch the flow using Stripe.js.</p>
     */
    public function post(\StripeSDK\Requests\V1\LinkAccountSessions\Post $payload): \StripeSDK\DTOs\FinancialConnections\Session|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\FinancialConnections\Session|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_SESSION = [
        'method' => 'GET',
        'path' => '/v1/link_account_sessions/{session}',
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
                'type' => '\\StripeSDK\\DTOs\\FinancialConnections\\Session',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a Session
     *
     * <p>Retrieves the details of a Financial Connections <code>Session</code></p>
     */
    public function getBySession(string $session, ?\StripeSDK\GetParams\V1\LinkAccountSessions\BySession $params = null): \StripeSDK\DTOs\FinancialConnections\Session|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\FinancialConnections\Session|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SESSION), path: ['session' => $session], parameters: $params);
        return $result;
    }
}
