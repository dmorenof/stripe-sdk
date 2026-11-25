<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Quotes\ByQuote;

final class Cancel extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/quotes/{quote}/cancel',
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
                'type' => '\\StripeSDK\\DTOs\\Quote',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'quote' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Cancel a quote
     *
     * <p>Cancels the quote.</p>
     */
    public function post(string $quote, ?\StripeSDK\Requests\V1\Quotes\ByQuote\Cancel\Post $payload = null): \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['quote' => $quote], body: $payload);
        return $result;
    }
}
