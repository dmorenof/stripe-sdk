<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * RefundPaymentReaderAction
 *
 * Represents a reader action to refund a payment
 */
final class RefundPaymentAction extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The amount being refunded.
     */
    public int $amount;
    /**
     * Charge that is being refunded.
     */
    public \StripeSDK\DTOs\TerminalReaderReaderResource\RefundPaymentAction\ChargeDTO $charge;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\TerminalReaderReaderResource\RefundPaymentAction\MetadataMap $metadata;
    /**
     * Payment intent that is being refunded.
     */
    public \StripeSDK\DTOs\TerminalReaderReaderResource\RefundPaymentAction\PaymentIntentDTO $payment_intent;
    /**
     * The reason for the refund.
     */
    public \StripeSDK\Enums\TerminalReaderReaderResource\RefundPaymentAction\ReasonEnum $reason;
    /**
     * Unique identifier for the refund object.
     */
    public \StripeSDK\DTOs\TerminalReaderReaderResource\RefundPaymentAction\RefundDTO $refund;
    /**
     * Boolean indicating whether the application fee should be refunded when refunding this charge. If a full charge refund is given, the full application fee will be refunded. Otherwise, the application fee will be refunded in an amount proportional to the amount of the charge refunded. An application fee can be refunded only by the application that created the charge.
     */
    public bool $refund_application_fee;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\RefundPaymentConfig $refund_payment_config;
    /**
     * Boolean indicating whether the transfer should be reversed when refunding this charge. The transfer will be reversed proportionally to the amount being refunded (either the entire or partial amount). A transfer can be reversed only by the application that created the charge.
     */
    public bool $reverse_transfer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\TerminalReaderReaderResource\RefundPaymentAction\ReasonEnum::from($value) : parent::assignMember($name, $value),
            'refund_application_fee' => is_bool($value) ? $this->refund_application_fee = $value : parent::assignMember($name, $value),
            'refund_payment_config' => $value instanceof \stdClass ? $this->refund_payment_config = new \StripeSDK\DTOs\TerminalReaderReaderResource\RefundPaymentConfig($value) : parent::assignMember($name, $value),
            'reverse_transfer' => is_bool($value) ? $this->reverse_transfer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
