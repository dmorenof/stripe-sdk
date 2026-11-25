<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * ProcessSetupConfig
 *
 * Represents a per-setup override of a reader configuration
 */
final class ProcessSetupConfig extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Enable customer-initiated cancellation when processing this SetupIntent.
     */
    public bool $enable_customer_cancellation;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable_customer_cancellation' => is_bool($value) ? $this->enable_customer_cancellation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
