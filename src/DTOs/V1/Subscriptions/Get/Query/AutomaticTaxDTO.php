<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Subscriptions\Get\Query;

/**
 * automatic_tax_filter_params
 */
final class AutomaticTaxDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
