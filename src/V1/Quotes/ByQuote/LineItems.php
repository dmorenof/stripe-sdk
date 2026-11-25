<?php

declare(strict_types=1);

namespace StripeSDK\V1\Quotes\ByQuote;

final class LineItems extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/quotes/{quote}/line_items [operationId: GetQuotesQuoteLineItems] */
    /**
     * Retrieve a quote's line items
     *
     * <p>When retrieving a quote, there is an includable <strong>line_items</strong> property containing the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of line items.</p>
     */
    public static function get(string $quote, ?\StripeSDK\GetParams\V1\Quotes\ByQuote\LineItems $params = null): \StripeSDK\Responses\V1\Quotes\ByQuote\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Quotes\ByQuote\LineItems::class)->get($quote, $params);
    }
}
