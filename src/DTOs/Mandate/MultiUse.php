<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Mandate;

/**
 * mandate_multi_use
 */
final class MultiUse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The amount of the payment on a multi use mandate.
     */
    public int $amount;
    /**
     * The currency of the payment on a multi use mandate.
     * Format: currency
     */
    public string $currency;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
