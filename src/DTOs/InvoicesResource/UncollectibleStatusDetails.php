<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InvoicesResource;

/**
 * InvoicesResourceUncollectibleStatusDetails
 */
final class UncollectibleStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The reason why the invoice is uncollectible.
     */
    public ?\StripeSDK\Enums\InvoicesResource\UncollectibleStatusDetails\ReasonEnum $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => $value === null || is_string($value) ? $this->reason = $value === null ? null : \StripeSDK\Enums\InvoicesResource\UncollectibleStatusDetails\ReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
