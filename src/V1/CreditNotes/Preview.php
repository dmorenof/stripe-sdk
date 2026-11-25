<?php

declare(strict_types=1);

namespace StripeSDK\V1\CreditNotes;

final class Preview extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/credit_notes/preview [operationId: GetCreditNotesPreview] */
    /**
     * Preview a credit note
     *
     * <p>Get a preview of a credit note without creating it.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\CreditNotes\Preview $params): \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\CreditNotes\Preview::class)->get($params);
    }
}
