<?php

declare(strict_types=1);

namespace StripeSDK\V1\CreditNotes\Preview;

final class Lines extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/credit_notes/preview/lines [operationId: GetCreditNotesPreviewLines] */
    /**
     * Retrieve a credit note preview's line items
     *
     * <p>When retrieving a credit note preview, you’ll get a <strong>lines</strong> property containing the first handful of those items. This URL you can retrieve the full (paginated) list of line items.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\CreditNotes\Preview\Lines $params): \StripeSDK\Responses\V1\CreditNotes\Preview\Lines\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\CreditNotes\Preview\Lines::class)->get($params);
    }
}
