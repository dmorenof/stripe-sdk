<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class ExchangeRates extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/exchange_rates',
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
                'type' => '\\StripeSDK\\Responses\\V1\\ExchangeRates\\GetStatus200',
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
     * List all exchange rates
     *
     * <p>[Deprecated] The <code>ExchangeRate</code> APIs are deprecated. Please use the <a href="https://docs.stripe.com/payments/currencies/localize-prices/fx-quotes-api">FX Quotes API</a> instead.</p>
     *
     * <p>Returns a list of objects that contain the rates at which foreign currencies are converted to one another. Only shows the currencies for which Stripe supports.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\ExchangeRates $params = null): \StripeSDK\Responses\V1\ExchangeRates\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\ExchangeRates\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_RATE_ID = [
        'method' => 'GET',
        'path' => '/v1/exchange_rates/{rate_id}',
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
                'type' => '\\StripeSDK\\DTOs\\ExchangeRate',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'rate_id' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an exchange rate
     *
     * <p>[Deprecated] The <code>ExchangeRate</code> APIs are deprecated. Please use the <a href="https://docs.stripe.com/payments/currencies/localize-prices/fx-quotes-api">FX Quotes API</a> instead.</p>
     *
     * <p>Retrieves the exchange rates from the given currency to every supported currency.</p>
     */
    public function getByRateId(string $rate_id, ?\StripeSDK\GetParams\V1\ExchangeRates\ByRateId $params = null): \StripeSDK\DTOs\ExchangeRate|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ExchangeRate|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_RATE_ID), path: ['rate_id' => $rate_id], parameters: $params);
        return $result;
    }
}
