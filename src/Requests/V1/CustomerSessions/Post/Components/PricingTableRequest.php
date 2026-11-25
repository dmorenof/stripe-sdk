<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\CustomerSessions\Post\Components;

/**
 * pricing_table_param
 */
final class PricingTableRequest extends \Dmorenof\SdkRuntime\DTO
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
