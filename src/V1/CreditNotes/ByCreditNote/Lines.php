<?php

declare(strict_types=1);

namespace StripeSDK\V1\CreditNotes\ByCreditNote;

final class Lines extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/credit_notes/{credit_note}/lines [operationId: GetCreditNotesCreditNoteLines] */
    /**
     * Retrieve a credit note's line items
     *
     * <p>When retrieving a credit note, you’ll get a <strong>lines</strong> property containing the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of line items.</p>
     */
    public static function get(string $credit_note, ?\StripeSDK\GetParams\V1\CreditNotes\ByCreditNote\Lines $params = null): \StripeSDK\Responses\V1\CreditNotes\ByCreditNote\Lines\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\CreditNotes\ByCreditNote\Lines::class)->get($credit_note, $params);
    }
}
