<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Quotes\ByQuote;

final class LineItems extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/quotes/{quote}/line_items',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Quotes\\ByQuote\\LineItems\\GetStatus200',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a quote's line items
     *
     * <p>When retrieving a quote, there is an includable <strong>line_items</strong> property containing the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of line items.</p>
     */
    public function get(string $quote, ?\StripeSDK\GetParams\V1\Quotes\ByQuote\LineItems $params = null): \StripeSDK\Responses\V1\Quotes\ByQuote\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Quotes\ByQuote\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['quote' => $quote], parameters: $params);
        return $result;
    }
}
