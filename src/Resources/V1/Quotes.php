<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Quotes extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/quotes',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Quotes\\GetStatus200',
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
     * List all quotes
     *
     * <p>Returns a list of your quotes.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Quotes $params = null): \StripeSDK\Responses\V1\Quotes\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Quotes\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/quotes',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'application_fee_amount' => 'nested',
            'application_fee_percent' => 'nested',
            'automatic_tax' => 'nested',
            'default_tax_rates' => 'nested',
            'description' => 'nested',
            'discounts' => 'nested',
            'expand' => 'nested',
            'footer' => 'nested',
            'from_quote' => 'nested',
            'header' => 'nested',
            'invoice_settings' => 'nested',
            'line_items' => 'nested',
            'metadata' => 'deepObject',
            'on_behalf_of' => 'nested',
            'subscription_data' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

    /**
     * Create a quote
     *
     * <p>A quote models prices and services for a customer. Default options for <code>header</code>, <code>description</code>, <code>footer</code>, and <code>expires_at</code> can be set in the dashboard via the <a href="https://dashboard.stripe.com/settings/billing/quote">quote template</a>.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Quotes\Post $payload = null): \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_QUOTE = [
        'method' => 'GET',
        'path' => '/v1/quotes/{quote}',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a quote
     *
     * <p>Retrieves the quote with the given ID.</p>
     */
    public function getByQuote(string $quote, ?\StripeSDK\GetParams\V1\Quotes\ByQuote $params = null): \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_QUOTE), path: ['quote' => $quote], parameters: $params);
        return $result;
    }

    private const array POST_BY_QUOTE = [
        'method' => 'POST',
        'path' => '/v1/quotes/{quote}',
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
            'application_fee_amount' => 'nested',
            'application_fee_percent' => 'nested',
            'automatic_tax' => 'nested',
            'default_tax_rates' => 'nested',
            'description' => 'nested',
            'discounts' => 'nested',
            'expand' => 'nested',
            'footer' => 'nested',
            'header' => 'nested',
            'invoice_settings' => 'nested',
            'line_items' => 'nested',
            'metadata' => 'deepObject',
            'on_behalf_of' => 'nested',
            'subscription_data' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

    /**
     * Update a quote
     *
     * <p>A quote models prices and services for a customer.</p>
     */
    public function postByQuote(string $quote, ?\StripeSDK\Requests\V1\Quotes\ByQuote\Post $payload = null): \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_QUOTE), path: ['quote' => $quote], body: $payload);
        return $result;
    }
}
