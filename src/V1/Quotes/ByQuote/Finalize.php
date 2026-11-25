<?php

declare(strict_types=1);

namespace StripeSDK\V1\Quotes\ByQuote;

final class Finalize extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/quotes/{quote}/finalize [operationId: PostQuotesQuoteFinalize] */
    /**
     * Finalize a quote
     *
     * <p>Finalizes the quote.</p>
     */
    public static function post(string $quote, ?\StripeSDK\Requests\V1\Quotes\ByQuote\Finalize\Post $payload = null): \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Quotes\ByQuote\Finalize::class)->post($quote, $payload);
    }
}
