<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Tax;

final class Calculations extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/tax/calculations',
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
                'type' => '\\StripeSDK\\DTOs\\Tax\\Calculation',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'customer_details' => 'nested',
            'expand' => 'nested',
            'line_items' => 'nested',
            'ship_from_details' => 'nested',
            'shipping_cost' => 'nested',
        ],
    ];

    /**
     * Create a Calculation
     *
     * <p>Calculates tax based on the input and returns a Tax <code>Calculation</code> object.</p>
     */
    public function post(\StripeSDK\Requests\V1\Tax\Calculations\Post $payload): \StripeSDK\DTOs\Tax\Calculation|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Tax\Calculation|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_CALCULATION = [
        'method' => 'GET',
        'path' => '/v1/tax/calculations/{calculation}',
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
                'type' => '\\StripeSDK\\DTOs\\Tax\\Calculation',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'calculation' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a Calculation
     *
     * <p>Retrieves a Tax <code>Calculation</code> object, if the calculation hasn’t expired.</p>
     */
    public function getByCalculation(string $calculation, ?\StripeSDK\GetParams\V1\Tax\Calculations\ByCalculation $params = null): \StripeSDK\DTOs\Tax\Calculation|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Tax\Calculation|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CALCULATION), path: ['calculation' => $calculation], parameters: $params);
        return $result;
    }
}
