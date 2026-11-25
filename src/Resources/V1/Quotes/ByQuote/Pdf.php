<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Quotes\ByQuote;

final class Pdf extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/quotes/{quote}/pdf',
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
                'type' => '\\Psr\\Http\\Message\\ResponseInterface',
                'schemaNullable' => false,
                'mediaType' => 'application/pdf',
                'encoding' => 'binary',
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
        'serverUrl' => 'https://files.stripe.com',
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Download quote PDF
     *
     * <p>Download the PDF for a finalized quote. Explanation for special handling can be found <a href="https://docs.stripe.com/quotes/overview#quote_pdf">here</a></p>
     */
    public function get(string $quote, ?\StripeSDK\GetParams\V1\Quotes\ByQuote\Pdf $params = null): \Psr\Http\Message\ResponseInterface|\StripeSDK\DTOs\Error|null
    {
        /** @var \Psr\Http\Message\ResponseInterface|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['quote' => $quote], parameters: $params);
        return $result;
    }
}
