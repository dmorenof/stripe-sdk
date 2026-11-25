<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class AccountSessions extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/account_sessions',
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
                'type' => '\\StripeSDK\\DTOs\\Account\\Session',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'components' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Create an Account Session
     *
     * <p>Creates an AccountSession object that includes a single-use token that the platform can use on their front-end to grant client-side API access.</p>
     */
    public function post(\StripeSDK\Requests\V1\AccountSessions\Post $payload): \StripeSDK\DTOs\Account\Session|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Account\Session|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
