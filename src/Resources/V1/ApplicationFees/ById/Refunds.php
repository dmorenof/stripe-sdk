<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\ApplicationFees\ById;

final class Refunds extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/application_fees/{id}/refunds',
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
                'type' => '\\StripeSDK\\Responses\\V1\\ApplicationFees\\ById\\Refunds\\GetStatus200',
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
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all application fee refunds
     *
     * <p>You can see a list of the refunds belonging to a specific application fee. Note that the 10 most recent refunds are always available by default on the application fee object. If you need more than those 10, you can use this API method and the <code>limit</code> and <code>starting_after</code> parameters to page through additional refunds.</p>
     */
    public function get(string $id, ?\StripeSDK\GetParams\V1\ApplicationFees\ById\Refunds $params = null): \StripeSDK\Responses\V1\ApplicationFees\ById\Refunds\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\ApplicationFees\ById\Refunds\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/application_fees/{id}/refunds',
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
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Create an application fee refund
     *
     * <p>Refunds an application fee that has previously been collected but not yet refunded.
     * Funds will be refunded to the Stripe account from which the fee was originally collected.</p>
     *
     * <p>You can optionally refund only part of an application fee.
     * You can do so multiple times, until the entire fee has been refunded.</p>
     *
     * <p>Once entirely refunded, an application fee can’t be refunded again.
     * This method will raise an error when called on an already-refunded application fee,
     * or when trying to refund more money than is left on an application fee.</p>
     */
    public function post(string $id, ?\StripeSDK\Requests\V1\ApplicationFees\ById\Refunds\Post $payload = null): \StripeSDK\DTOs\FeeRefund|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\FeeRefund|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
