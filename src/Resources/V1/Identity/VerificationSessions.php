<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Identity;

final class VerificationSessions extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/identity/verification_sessions',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Identity\\VerificationSessions\\GetStatus200',
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
     * List VerificationSessions
     *
     * <p>Returns a list of VerificationSessions</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Identity\VerificationSessions $params = null): \StripeSDK\Responses\V1\Identity\VerificationSessions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Identity\VerificationSessions\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/identity/verification_sessions',
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
                'type' => '\\StripeSDK\\DTOs\\Identity\\VerificationSession',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'deepObject',
            'options' => 'nested',
            'provided_details' => 'nested',
            'related_person' => 'nested',
        ],
    ];

    /**
     * Create a VerificationSession
     *
     * <p>Creates a VerificationSession object.</p>
     *
     * <p>After the VerificationSession is created, display a verification modal using the session <code>client_secret</code> or send your users to the session’s <code>url</code>.</p>
     *
     * <p>If your API key is in test mode, verification checks won’t actually process, though everything else will occur as if in live mode.</p>
     *
     * <p>Related guide: <a href="/docs/identity/verify-identity-documents">Verify your users’ identity documents</a></p>
     */
    public function post(?\StripeSDK\Requests\V1\Identity\VerificationSessions\Post $payload = null): \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_SESSION = [
        'method' => 'GET',
        'path' => '/v1/identity/verification_sessions/{session}',
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
                'type' => '\\StripeSDK\\DTOs\\Identity\\VerificationSession',
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
     * Retrieve a VerificationSession
     *
     * <p>Retrieves the details of a VerificationSession that was previously created.</p>
     *
     * <p>When the session status is <code>requires_input</code>, you can use this method to retrieve a valid
     * <code>client_secret</code> or <code>url</code> to allow re-submission.</p>
     */
    public function getBySession(string $session, ?\StripeSDK\GetParams\V1\Identity\VerificationSessions\BySession $params = null): \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SESSION), path: ['session' => $session], parameters: $params);
        return $result;
    }

    private const array POST_BY_SESSION = [
        'method' => 'POST',
        'path' => '/v1/identity/verification_sessions/{session}',
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
                'type' => '\\StripeSDK\\DTOs\\Identity\\VerificationSession',
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
            'expand' => 'nested',
            'metadata' => 'deepObject',
            'options' => 'nested',
            'provided_details' => 'nested',
        ],
    ];

    /**
     * Update a VerificationSession
     *
     * <p>Updates a VerificationSession object.</p>
     *
     * <p>When the session status is <code>requires_input</code>, you can use this method to update the
     * verification check and options.</p>
     */
    public function postBySession(string $session, ?\StripeSDK\Requests\V1\Identity\VerificationSessions\BySession\Post $payload = null): \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_SESSION), path: ['session' => $session], body: $payload);
        return $result;
    }
}
