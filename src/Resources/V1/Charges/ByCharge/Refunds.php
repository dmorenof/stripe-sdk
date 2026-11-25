<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Charges\ByCharge;

final class Refunds extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/charges/{charge}/refunds',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Charges\\ByCharge\\Refunds\\GetStatus200',
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
     * List all refunds
     *
     * <p>You can see a list of the refunds belonging to a specific charge. Note that the 10 most recent refunds are always available by default on the charge object. If you need more than those 10, you can use this API method and the <code>limit</code> and <code>starting_after</code> parameters to page through additional refunds.</p>
     */
    public function get(string $charge, ?\StripeSDK\GetParams\V1\Charges\ByCharge\Refunds $params = null): \StripeSDK\Responses\V1\Charges\ByCharge\Refunds\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Charges\ByCharge\Refunds\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['charge' => $charge], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/charges/{charge}/refunds',
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
        'validation' => [
            'charge' => [
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
    public function post(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Refunds\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['charge' => $charge], body: $payload);
        return $result;
    }

    private const array GET_BY_REFUND = [
        'method' => 'GET',
        'path' => '/v1/charges/{charge}/refunds/{refund}',
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
     * <p>Retrieves the details of an existing refund.</p>
     */
    public function getByRefund(\StripeSDK\PathParams\V1\Charges\ByCharge\Refunds\ByRefund $identifier, ?\StripeSDK\GetParams\V1\Charges\ByCharge\Refunds\ByRefund $params = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_REFUND), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST_BY_REFUND = [
        'method' => 'POST',
        'path' => '/v1/charges/{charge}/refunds/{refund}',
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
     * <p>Update a specified refund.</p>
     */
    public function postByRefund(\StripeSDK\PathParams\V1\Charges\ByCharge\Refunds\ByRefund $identifier, ?\StripeSDK\Requests\V1\Charges\ByCharge\Refunds\ByRefund\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_REFUND), path: $identifier, body: $payload);
        return $result;
    }
}
