<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Quotes extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/quotes [operationId: GetQuotes] */
    /**
     * List all quotes
     *
     * <p>Returns a list of your quotes.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Quotes $params = null): \StripeSDK\Responses\V1\Quotes\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Quotes::class)->get($params);
    }

    /** POST /v1/quotes [operationId: PostQuotes] */
    /**
     * Create a quote
     *
     * <p>A quote models prices and services for a customer. Default options for <code>header</code>, <code>description</code>, <code>footer</code>, and <code>expires_at</code> can be set in the dashboard via the <a href="https://dashboard.stripe.com/settings/billing/quote">quote template</a>.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Quotes\Post $payload = null): \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Quotes::class)->post($payload);
    }

    /** GET /v1/quotes/{quote} [operationId: GetQuotesQuote] */
    /**
     * Retrieve a quote
     *
     * <p>Retrieves the quote with the given ID.</p>
     */
    public static function getByQuote(string $quote, ?\StripeSDK\GetParams\V1\Quotes\ByQuote $params = null): \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Quotes::class)->getByQuote($quote, $params);
    }

    /** POST /v1/quotes/{quote} [operationId: PostQuotesQuote] */
    /**
     * Update a quote
     *
     * <p>A quote models prices and services for a customer.</p>
     */
    public static function postByQuote(string $quote, ?\StripeSDK\Requests\V1\Quotes\ByQuote\Post $payload = null): \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Quotes::class)->postByQuote($quote, $payload);
    }
}
