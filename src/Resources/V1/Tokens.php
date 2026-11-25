<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Tokens extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/tokens',
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
                'type' => '\\StripeSDK\\DTOs\\Token',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'account' => 'nested',
            'bank_account' => 'nested',
            'card' => 'nested',
            'cvc_update' => 'nested',
            'expand' => 'nested',
            'person' => 'nested',
            'pii' => 'nested',
        ],
    ];

    /**
     * Create a bank account token
     *
     * <p>Creates a single-use token that represents a bank account’s details.
     * You can use this token with any v1 API method in place of a bank account dictionary. You can only use this token once. To do so, attach it to a <a href="#accounts">connected account</a> where <a href="/api/accounts/object#account_object-controller-requirement_collection">controller.requirement_collection</a> is <code>application</code>, which includes Custom accounts.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Tokens\Post $payload = null): \StripeSDK\DTOs\Token|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Token|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_TOKEN = [
        'method' => 'GET',
        'path' => '/v1/tokens/{token}',
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
                'type' => '\\StripeSDK\\DTOs\\Token',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'token' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a token
     *
     * <p>Retrieves the token with the given ID.</p>
     */
    public function getByToken(string $token, ?\StripeSDK\GetParams\V1\Tokens\ByToken $params = null): \StripeSDK\DTOs\Token|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Token|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TOKEN), path: ['token' => $token], parameters: $params);
        return $result;
    }
}
