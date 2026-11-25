<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Payouts extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/payouts',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Payouts\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'arrival_date' => 'nested',
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all payouts
     *
     * <p>Returns a list of existing payouts sent to third-party bank accounts or payouts that Stripe sent to you. The payouts return in sorted order, with the most recently created payouts appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Payouts $params = null): \StripeSDK\Responses\V1\Payouts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Payouts\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payouts',
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
                'type' => '\\StripeSDK\\DTOs\\Payout',
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
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Create a payout
     *
     * <p>To send funds to your own bank account, create a new payout object. Your <a href="#balance">Stripe balance</a> must cover the payout amount. If it doesn’t, you receive an “Insufficient Funds” error.</p>
     *
     * <p>If your API key is in test mode, money won’t actually be sent, though every other action occurs as if you’re in live mode.</p>
     *
     * <p>If you create a manual payout on a Stripe account that uses multiple payment source types, you need to specify the source type balance that the payout draws from. The <a href="/api/balances/object">balance object</a> details available and pending amounts by source type.</p>
     */
    public function post(\StripeSDK\Requests\V1\Payouts\Post $payload): \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_PAYOUT = [
        'method' => 'GET',
        'path' => '/v1/payouts/{payout}',
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
                'type' => '\\StripeSDK\\DTOs\\Payout',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'payout' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a payout
     *
     * <p>Retrieves the details of an existing payout. Supply the unique payout ID from either a payout creation request or the payout list. Stripe returns the corresponding payout information.</p>
     */
    public function getByPayout(string $payout, ?\StripeSDK\GetParams\V1\Payouts\ByPayout $params = null): \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PAYOUT), path: ['payout' => $payout], parameters: $params);
        return $result;
    }

    private const array POST_BY_PAYOUT = [
        'method' => 'POST',
        'path' => '/v1/payouts/{payout}',
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
                'type' => '\\StripeSDK\\DTOs\\Payout',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'payout' => [
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
     * Update a payout
     *
     * <p>Updates the specified payout by setting the values of the parameters you pass. We don’t change parameters that you don’t provide. This request only accepts the metadata as arguments.</p>
     */
    public function postByPayout(string $payout, ?\StripeSDK\Requests\V1\Payouts\ByPayout\Post $payload = null): \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_PAYOUT), path: ['payout' => $payout], body: $payload);
        return $result;
    }
}
