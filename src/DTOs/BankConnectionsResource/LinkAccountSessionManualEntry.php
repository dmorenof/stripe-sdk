<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceLinkAccountSessionManualEntry
 */
final class LinkAccountSessionManualEntry extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Controls how manual entry of bank account details is presented to the user.
     */
    public \StripeSDK\Enums\BankConnectionsResource\LinkAccountSessionManualEntry\ModeEnum $mode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mode' => is_string($value) ? $this->mode = \StripeSDK\Enums\BankConnectionsResource\LinkAccountSessionManualEntry\ModeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
