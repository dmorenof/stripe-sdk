<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Topups\ByTopup;

final class Cancel extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/topups/{topup}/cancel',
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
                'type' => '\\StripeSDK\\DTOs\\Topup',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'topup' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Cancel a top-up
     *
     * <p>Cancels a top-up. Only pending top-ups can be canceled.</p>
     */
    public function post(string $topup, ?\StripeSDK\Requests\V1\Topups\ByTopup\Cancel\Post $payload = null): \StripeSDK\DTOs\Topup|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Topup|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['topup' => $topup], body: $payload);
        return $result;
    }
}
