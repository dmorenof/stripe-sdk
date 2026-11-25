<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\ApplicationFees\ByFee;

final class Refunds extends \StripeSDK\Client
{
    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/application_fees/{fee}/refunds/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\FeeRefund',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'fee' => [
                'maxLength' => 5000,
            ],
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an application fee refund
     *
     * <p>By default, you can see the 10 most recent refunds stored directly on the application fee object, but you can also retrieve details about a specific refund stored on the application fee.</p>
     */
    public function getById(\StripeSDK\PathParams\V1\ApplicationFees\ByFee\Refunds\ById $identifier, ?\StripeSDK\GetParams\V1\ApplicationFees\ByFee\Refunds\ById $params = null): \StripeSDK\DTOs\FeeRefund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\FeeRefund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/application_fees/{fee}/refunds/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\FeeRefund',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'fee' => [
                'maxLength' => 5000,
            ],
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Update an application fee refund
     *
     * <p>Updates the specified application fee refund by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     *
     * <p>This request only accepts metadata as an argument.</p>
     */
    public function postById(\StripeSDK\PathParams\V1\ApplicationFees\ByFee\Refunds\ById $identifier, ?\StripeSDK\Requests\V1\ApplicationFees\ByFee\Refunds\ById\Post $payload = null): \StripeSDK\DTOs\FeeRefund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\FeeRefund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: $identifier, body: $payload);
        return $result;
    }
}
