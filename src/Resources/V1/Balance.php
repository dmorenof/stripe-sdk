<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Balance extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/balance',
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
                'type' => '\\StripeSDK\\DTOs\\Balance',
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
     * Retrieve balance
     *
     * <p>Retrieves the current account balance, based on the authentication that was used to make the request.
     *  For a sample request, see <a href="/docs/connect/account-balances#accounting-for-negative-balances">Accounting for negative balances</a>.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Balance $params = null): \StripeSDK\DTOs\Balance|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Balance|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
