<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * InvoicesPaymentsInvoicePaymentAssociatedPayment
 */
final class InvoicesPaymentsInvoicePaymentAssociatedPayment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * ID of the successful charge for this payment when `type` is `charge`. Note: charge is only surfaced if the charge object is not associated with a payment intent. If the charge object does have a payment intent, the Invoice Payment surfaces the payment intent instead.
     */
    public \StripeSDK\DTOs\InvoicesPaymentsInvoicePaymentAssociatedPayment\ChargeDTO $charge;
    /**
     * ID of the PaymentIntent associated with this payment when `type` is `payment_intent`. Note: This property is only populated for invoices finalized on or after March 15th, 2019.
     */
    public \StripeSDK\DTOs\InvoicesPaymentsInvoicePaymentAssociatedPayment\PaymentIntentDTO $payment_intent;
    /**
     * ID of the PaymentRecord associated with this payment when `type` is `payment_record`.
     */
    public \StripeSDK\DTOs\InvoicesPaymentsInvoicePaymentAssociatedPayment\PaymentRecordDTO $payment_record;
    /**
     * Type of payment object associated with this invoice payment.
     */
    public \StripeSDK\Enums\InvoicesPaymentsInvoicePaymentAssociatedPayment\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\InvoicesPaymentsInvoicePaymentAssociatedPayment\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
