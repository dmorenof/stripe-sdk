<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentLinks\ByPaymentLink;

final class LineItems extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/payment_links/{payment_link}/line_items [operationId: GetPaymentLinksPaymentLinkLineItems] */
    /**
     * Retrieve a payment link's line items
     *
     * <p>When retrieving a payment link, there is an includable <strong>line_items</strong> property containing the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of line items.</p>
     */
    public static function get(string $payment_link, ?\StripeSDK\GetParams\V1\PaymentLinks\ByPaymentLink\LineItems $params = null): \StripeSDK\Responses\V1\PaymentLinks\ByPaymentLink\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentLinks\ByPaymentLink\LineItems::class)->get($payment_link, $params);
    }
}
