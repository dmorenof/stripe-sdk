<?php

declare(strict_types=1);

namespace StripeSDK\V1\Quotes\ByQuote;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/quotes/{quote}/cancel [operationId: PostQuotesQuoteCancel] */
    /**
     * Cancel a quote
     *
     * <p>Cancels the quote.</p>
     */
    public static function post(string $quote, ?\StripeSDK\Requests\V1\Quotes\ByQuote\Cancel\Post $payload = null): \StripeSDK\DTOs\Quote|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Quotes\ByQuote\Cancel::class)->post($quote, $payload);
    }
}
