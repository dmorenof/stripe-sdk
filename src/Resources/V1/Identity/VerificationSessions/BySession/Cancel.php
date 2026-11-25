<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Identity\VerificationSessions\BySession;

final class Cancel extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/identity/verification_sessions/{session}/cancel',
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
        ],
    ];

    /**
     * Cancel a VerificationSession
     *
     * <p>A VerificationSession object can be canceled when it is in <code>requires_input</code> <a href="/docs/identity/how-sessions-work">status</a>.</p>
     *
     * <p>Once canceled, future submission attempts are disabled. This cannot be undone. <a href="/docs/identity/verification-sessions#cancel">Learn more</a>.</p>
     */
    public function post(string $session, ?\StripeSDK\Requests\V1\Identity\VerificationSessions\BySession\Cancel\Post $payload = null): \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['session' => $session], body: $payload);
        return $result;
    }
}
