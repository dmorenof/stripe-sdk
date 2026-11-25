<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * CollectPaymentMethodReaderAction
 *
 * Represents a reader action to collect a payment method
 */
final class CollectPaymentMethodAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_intent',
    ];

    public \StripeSDK\DTOs\TerminalReaderReaderResource\CollectConfig $collect_config;
    /**
     * Most recent PaymentIntent processed by the reader.
     */
    public \StripeSDK\DTOs\TerminalReaderReaderResource\CollectPaymentMethodAction\PaymentIntentDTO $payment_intent;
    public \StripeSDK\DTOs\Payment\Method $payment_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'collect_config' => $value instanceof \stdClass ? $this->collect_config = new \StripeSDK\DTOs\TerminalReaderReaderResource\CollectConfig($value) : parent::assignMember($name, $value),
            'payment_method' => $value instanceof \stdClass ? $this->payment_method = new \StripeSDK\DTOs\Payment\Method($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
