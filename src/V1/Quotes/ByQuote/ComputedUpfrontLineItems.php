<?php

declare(strict_types=1);

namespace StripeSDK\V1\Quotes\ByQuote;

final class ComputedUpfrontLineItems extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/quotes/{quote}/computed_upfront_line_items [operationId: GetQuotesQuoteComputedUpfrontLineItems] */
    /**
     * Retrieve a quote's upfront line items
     *
     * <p>When retrieving a quote, there is an includable <a href="https://stripe.com/docs/api/quotes/object#quote_object-computed-upfront-line_items"><strong>computed.upfront.line_items</strong></a> property containing the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of upfront line items.</p>
     */
    public static function get(string $quote, ?\StripeSDK\GetParams\V1\Quotes\ByQuote\ComputedUpfrontLineItems $params = null): \StripeSDK\Responses\V1\Quotes\ByQuote\ComputedUpfrontLineItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Quotes\ByQuote\ComputedUpfrontLineItems::class)->get($quote, $params);
    }
}
