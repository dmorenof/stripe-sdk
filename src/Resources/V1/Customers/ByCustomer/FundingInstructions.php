<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Customers\ByCustomer;

final class FundingInstructions extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/customers/{customer}/funding_instructions',
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
                'type' => '\\StripeSDK\\DTOs\\FundingInstructions',
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
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'bank_transfer' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Create or retrieve funding instructions for a customer cash balance
     *
     * <p>Retrieve funding instructions for a customer cash balance. If funding instructions do not yet exist for the customer, new
     * funding instructions will be created. If funding instructions have already been created for a given customer, the same
     * funding instructions will be retrieved. In other words, we will return the same funding instructions each time.</p>
     */
    public function post(string $customer, \StripeSDK\Requests\V1\Customers\ByCustomer\FundingInstructions\Post $payload): \StripeSDK\DTOs\FundingInstructions|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\FundingInstructions|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['customer' => $customer], body: $payload);
        return $result;
    }
}
