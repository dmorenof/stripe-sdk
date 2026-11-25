<?php

declare(strict_types=1);

namespace StripeSDK\V1\Quotes\ByQuote;

final class Pdf extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/quotes/{quote}/pdf [operationId: GetQuotesQuotePdf] */
    /**
     * Download quote PDF
     *
     * <p>Download the PDF for a finalized quote. Explanation for special handling can be found <a href="https://docs.stripe.com/quotes/overview#quote_pdf">here</a></p>
     */
    public static function get(string $quote, ?\StripeSDK\GetParams\V1\Quotes\ByQuote\Pdf $params = null): \Psr\Http\Message\ResponseInterface|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Quotes\ByQuote\Pdf::class)->get($quote, $params);
    }
}
