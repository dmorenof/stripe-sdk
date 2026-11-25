<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\LinkedAccounts\ByAccount;

final class Owners extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/linked_accounts/{account}/owners',
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
                'type' => '\\StripeSDK\\Responses\\V1\\LinkedAccounts\\ByAccount\\Owners\\GetStatus200',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List Account Owners
     *
     * <p>Lists all owners for a given <code>Account</code></p>
     */
    public function get(string $account, \StripeSDK\GetParams\V1\LinkedAccounts\ByAccount\Owners $params): \StripeSDK\Responses\V1\LinkedAccounts\ByAccount\Owners\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\LinkedAccounts\ByAccount\Owners\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['account' => $account], parameters: $params);
        return $result;
    }
}
