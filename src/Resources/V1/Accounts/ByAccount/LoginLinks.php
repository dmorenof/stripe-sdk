<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Accounts\ByAccount;

final class LoginLinks extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/accounts/{account}/login_links',
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
                'type' => '\\StripeSDK\\DTOs\\LoginLink',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'account' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Create a login link
     *
     * <p>Creates a login link for a connected account to access the Express Dashboard.</p>
     *
     * <p><strong>You can only create login links for accounts that use the <a href="/connect/express-dashboard">Express Dashboard</a> and are connected to your platform</strong>.</p>
     */
    public function post(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\LoginLinks\Post $payload = null): \StripeSDK\DTOs\LoginLink|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\LoginLink|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['account' => $account], body: $payload);
        return $result;
    }
}
