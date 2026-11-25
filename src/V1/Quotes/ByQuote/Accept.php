<?php

declare(strict_types=1);

namespace StripeSDK\V1\Quotes\ByQuote;

final class Accept extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/quotes/{quote}/accept [operationId: PostQuotesQuoteAccept] */
    /**
     * Accept a quote
     *
     * <p>Accepts the specified quote.</p>
     */
    public static function post(string $quote, ?\StripeSDK\Requests\V1\Quotes\ByQuote\Accept\Post $payload = null): \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Quotes\ByQuote\Accept::class)->post($quote, $payload);
    }
}
