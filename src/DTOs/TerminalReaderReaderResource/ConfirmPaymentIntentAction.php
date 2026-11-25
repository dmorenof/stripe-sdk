<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * ConfirmPaymentIntentReaderAction
 *
 * Represents a reader action to confirm a payment
 */
final class ConfirmPaymentIntentAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_intent',
    ];

    public \StripeSDK\DTOs\TerminalReaderReaderResource\ConfirmConfig $confirm_config;
    /**
     * Most recent PaymentIntent processed by the reader.
     */
    public \StripeSDK\DTOs\TerminalReaderReaderResource\ConfirmPaymentIntentAction\PaymentIntentDTO $payment_intent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'confirm_config' => $value instanceof \stdClass ? $this->confirm_config = new \StripeSDK\DTOs\TerminalReaderReaderResource\ConfirmConfig($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
