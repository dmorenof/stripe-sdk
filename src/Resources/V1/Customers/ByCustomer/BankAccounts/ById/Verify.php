<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Customers\ByCustomer\BankAccounts\ById;

final class Verify extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/customers/{customer}/bank_accounts/{id}/verify',
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
                'type' => '\\StripeSDK\\DTOs\\BankAccount',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'amounts' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Verify a bank account
     *
     * <p>Verify a specified bank account for a given customer.</p>
     */
    public function post(\StripeSDK\PathParams\V1\Customers\ByCustomer\BankAccounts\ById\Verify $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\BankAccounts\ById\Verify\Post $payload = null): \StripeSDK\DTOs\BankAccount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\BankAccount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, body: $payload);
        return $result;
    }
}
