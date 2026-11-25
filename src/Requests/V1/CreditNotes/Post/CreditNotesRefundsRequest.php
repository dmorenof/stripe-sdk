<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\CreditNotes\Post;

/**
 * credit_note_refund_params
 */
final class CreditNotesRefundsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public int $amount_refunded;
    public \StripeSDK\Requests\V1\CreditNotes\Post\RefundsItem\RecordRefundRequest $payment_record_refund;
    public string $refund;
    public \StripeSDK\Enums\V1\CreditNotes\Post\RefundsItem\RefundsItemTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_refunded' => is_int($value) ? $this->amount_refunded = $value : parent::assignMember($name, $value),
            'refund' => is_string($value) ? $this->refund = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\CreditNotes\Post\RefundsItem\RefundsItemTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
