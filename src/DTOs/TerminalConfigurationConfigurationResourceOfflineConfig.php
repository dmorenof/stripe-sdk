<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TerminalConfigurationConfigurationResourceOfflineConfig
 */
final class TerminalConfigurationConfigurationResourceOfflineConfig extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Determines whether to allow transactions to be collected while reader is offline. Defaults to false.
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
