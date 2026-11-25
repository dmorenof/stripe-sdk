<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * ProcessPaymentIntentReaderAction
 *
 * Represents a reader action to process a payment intent
 */
final class ProcessPaymentIntentAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_intent',
    ];

    /**
     * Most recent PaymentIntent processed by the reader.
     */
    public \StripeSDK\DTOs\TerminalReaderReaderResource\ProcessPaymentIntentAction\PaymentIntentDTO $payment_intent;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\ProcessConfig $process_config;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'process_config' => $value instanceof \stdClass ? $this->process_config = new \StripeSDK\DTOs\TerminalReaderReaderResource\ProcessConfig($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
