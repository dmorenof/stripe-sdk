<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * CollectConfig
 *
 * Represents a per-transaction override of a reader configuration
 */
final class CollectConfig extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Enable customer-initiated cancellation when processing this payment.
     */
    public bool $enable_customer_cancellation;
    /**
     * Override showing a tipping selection screen on this transaction.
     */
    public bool $skip_tipping;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\TippingConfig $tipping;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable_customer_cancellation' => is_bool($value) ? $this->enable_customer_cancellation = $value : parent::assignMember($name, $value),
            'skip_tipping' => is_bool($value) ? $this->skip_tipping = $value : parent::assignMember($name, $value),
            'tipping' => $value instanceof \stdClass ? $this->tipping = new \StripeSDK\DTOs\TerminalReaderReaderResource\TippingConfig($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
