<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class ExchangeRates extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/exchange_rates [operationId: GetExchangeRates] */
    /**
     * List all exchange rates
     *
     * <p>[Deprecated] The <code>ExchangeRate</code> APIs are deprecated. Please use the <a href="https://docs.stripe.com/payments/currencies/localize-prices/fx-quotes-api">FX Quotes API</a> instead.</p>
     *
     * <p>Returns a list of objects that contain the rates at which foreign currencies are converted to one another. Only shows the currencies for which Stripe supports.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\ExchangeRates $params = null): \StripeSDK\Responses\V1\ExchangeRates\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ExchangeRates::class)->get($params);
    }

    /** GET /v1/exchange_rates/{rate_id} [operationId: GetExchangeRatesRateId] */
    /**
     * Retrieve an exchange rate
     *
     * <p>[Deprecated] The <code>ExchangeRate</code> APIs are deprecated. Please use the <a href="https://docs.stripe.com/payments/currencies/localize-prices/fx-quotes-api">FX Quotes API</a> instead.</p>
     *
     * <p>Retrieves the exchange rates from the given currency to every supported currency.</p>
     */
    public static function getByRateId(string $rate_id, ?\StripeSDK\GetParams\V1\ExchangeRates\ByRateId $params = null): \StripeSDK\DTOs\ExchangeRate|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ExchangeRates::class)->getByRateId($rate_id, $params);
    }
}
