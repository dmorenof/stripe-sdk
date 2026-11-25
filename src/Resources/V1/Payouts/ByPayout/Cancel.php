<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Payouts\ByPayout;

final class Cancel extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payouts/{payout}/cancel',
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
        ],
    ];

    /**
     * Cancel a payout
     *
     * <p>You can cancel a previously created payout if its status is <code>pending</code>. Stripe refunds the funds to your available balance. You can’t cancel automatic Stripe payouts.</p>
     */
    public function post(string $payout, ?\StripeSDK\Requests\V1\Payouts\ByPayout\Cancel\Post $payload = null): \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['payout' => $payout], body: $payload);
        return $result;
    }
}
