<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_installments_card
 */
final class InstallmentsCard extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Whether Installments are enabled for this Invoice.
     */
    public ?bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => $value === null || is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
