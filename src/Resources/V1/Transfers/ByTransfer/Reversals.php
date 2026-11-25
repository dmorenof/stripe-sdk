<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Transfers\ByTransfer;

final class Reversals extends \StripeSDK\Client
{
    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/transfers/{transfer}/reversals/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Transfer\\Reversal',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
            'transfer' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a reversal
     *
     * <p>By default, you can see the 10 most recent reversals stored directly on the transfer object, but you can also retrieve details about a specific reversal stored on the transfer.</p>
     */
    public function getById(\StripeSDK\PathParams\V1\Transfers\ByTransfer\Reversals\ById $identifier, ?\StripeSDK\GetParams\V1\Transfers\ByTransfer\Reversals\ById $params = null): \StripeSDK\DTOs\Transfer\Reversal|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Transfer\Reversal|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/transfers/{transfer}/reversals/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Transfer\\Reversal',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
            'transfer' => [
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
     * Update a reversal
     *
     * <p>Updates the specified reversal by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     *
     * <p>This request only accepts metadata and description as arguments.</p>
     */
    public function postById(\StripeSDK\PathParams\V1\Transfers\ByTransfer\Reversals\ById $identifier, ?\StripeSDK\Requests\V1\Transfers\ByTransfer\Reversals\ById\Post $payload = null): \StripeSDK\DTOs\Transfer\Reversal|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Transfer\Reversal|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: $identifier, body: $payload);
        return $result;
    }
}
