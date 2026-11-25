<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InvoicesResource;

/**
 * InvoicesResourceStatusDetails
 */
final class StatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\InvoicesResource\UncollectibleStatusDetails $uncollectible;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'uncollectible' => $value instanceof \stdClass ? $this->uncollectible = new \StripeSDK\DTOs\InvoicesResource\UncollectibleStatusDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
