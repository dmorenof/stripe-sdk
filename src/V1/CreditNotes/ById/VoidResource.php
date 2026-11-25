<?php

declare(strict_types=1);

namespace StripeSDK\V1\CreditNotes\ById;

final class VoidResource extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/credit_notes/{id}/void [operationId: PostCreditNotesIdVoid] */
    /**
     * Void a credit note
     *
     * <p>Marks a credit note as void. Learn more about <a href="/docs/billing/invoices/credit-notes#voiding">voiding credit notes</a>.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\CreditNotes\ById\VoidResource\Post $payload = null): \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\CreditNotes\ById\VoidResource::class)->post($id, $payload);
    }
}
