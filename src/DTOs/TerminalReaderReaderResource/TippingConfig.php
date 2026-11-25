<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * TippingConfig
 *
 * Represents a per-transaction tipping configuration
 */
final class TippingConfig extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Amount used to calculate tip suggestions on tipping selection screen for this transaction. Must be a positive integer in the smallest currency unit (e.g., 100 cents to represent $1.00 or 100 to represent ¥100, a zero-decimal currency).
     */
    public int $amount_eligible;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_eligible' => is_int($value) ? $this->amount_eligible = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
