<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Credit;

/**
 * Credit Note Refund
 */
final class NoteRefund extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_refunded',
        'refund',
    ];

    /**
     * Amount of the refund that applies to this credit note, in cents (or local equivalent).
     */
    public int $amount_refunded;
    /**
     * The PaymentRecord refund details associated with this credit note refund.
     */
    public ?\StripeSDK\DTOs\Credit\NotesPaymentRecordRefund $payment_record_refund;
    /**
     * ID of the refund.
     */
    public \StripeSDK\DTOs\Credit\NoteRefund\RefundDTO $refund;
    /**
     * Type of the refund, one of `refund` or `payment_record_refund`.
     */
    public ?\StripeSDK\Enums\Credit\NoteRefund\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_refunded' => is_int($value) ? $this->amount_refunded = $value : parent::assignMember($name, $value),
            'payment_record_refund' => $value === null || $value instanceof \stdClass ? $this->payment_record_refund = $value === null ? null : new \StripeSDK\DTOs\Credit\NotesPaymentRecordRefund($value) : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\Credit\NoteRefund\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
