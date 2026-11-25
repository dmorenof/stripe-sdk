<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Terminal\Readers\ByReader;

final class PresentPaymentMethod extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/terminal/readers/{reader}/present_payment_method',
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
                'type' => '\\StripeSDK\\DTOs\\Terminal\\Reader',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'reader' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'card' => 'nested',
            'card_present' => 'nested',
            'expand' => 'nested',
            'interac_present' => 'nested',
        ],
    ];

    /**
     * Simulate presenting a payment method
     *
     * <p>Presents a payment method on a simulated reader. Can be used to simulate accepting a payment, saving a card or refunding a transaction.</p>
     */
    public function post(string $reader, ?\StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod\Post $payload = null): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['reader' => $reader], body: $payload);
        return $result;
    }
}
