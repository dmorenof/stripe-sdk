<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Tax\Calculations\ByCalculation;

final class LineItems extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/tax/calculations/{calculation}/line_items',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Tax\\Calculations\\ByCalculation\\LineItems\\GetStatus200',
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
     * Retrieve a Calculation's line items
     *
     * <p>Retrieves the line items of a tax calculation as a collection, if the calculation hasn’t expired.</p>
     */
    public function get(string $calculation, ?\StripeSDK\GetParams\V1\Tax\Calculations\ByCalculation\LineItems $params = null): \StripeSDK\Responses\V1\Tax\Calculations\ByCalculation\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Tax\Calculations\ByCalculation\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['calculation' => $calculation], parameters: $params);
        return $result;
    }
}
