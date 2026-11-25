<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Refunds extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/refunds',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Refunds\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all refunds
     *
     * <p>Returns a list of all refunds you created. We return the refunds in sorted order, with the most recent refunds appearing first. The 10 most recent refunds are always available by default on the Charge object.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Refunds $params = null): \StripeSDK\Responses\V1\Refunds\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Refunds\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/refunds',
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
                'type' => '\\StripeSDK\\DTOs\\Refund',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Create a refund
     *
     * <p>When you create a new refund, you must specify a Charge or a PaymentIntent object on which to create it.</p>
     *
     * <p>Creating a new refund will refund a charge that has previously been created but not yet refunded.
     * Funds will be refunded to the credit or debit card that was originally charged.</p>
     *
     * <p>You can optionally refund only part of a charge.
     * You can do so multiple times, until the entire charge has been refunded.</p>
     *
     * <p>Once entirely refunded, a charge can’t be refunded again.
     * This method will raise an error when called on an already-refunded charge,
     * or when trying to refund more money than is left on a charge.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Refunds\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_REFUND = [
        'method' => 'GET',
        'path' => '/v1/refunds/{refund}',
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
                'type' => '\\StripeSDK\\DTOs\\Refund',
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
     * Retrieve a refund
     *
     * <p>Retrieves the details of an existing refund.</p>
     */
    public function getByRefund(string $refund, ?\StripeSDK\GetParams\V1\Refunds\ByRefund $params = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_REFUND), path: ['refund' => $refund], parameters: $params);
        return $result;
    }

    private const array POST_BY_REFUND = [
        'method' => 'POST',
        'path' => '/v1/refunds/{refund}',
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
                'type' => '\\StripeSDK\\DTOs\\Refund',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Update a refund
     *
     * <p>Updates the refund that you specify by setting the values of the passed parameters. Any parameters that you don’t provide remain unchanged.</p>
     *
     * <p>This request only accepts <code>metadata</code> as an argument.</p>
     */
    public function postByRefund(string $refund, ?\StripeSDK\Requests\V1\Refunds\ByRefund\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_REFUND), path: ['refund' => $refund], body: $payload);
        return $result;
    }
}
