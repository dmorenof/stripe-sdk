<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Issuing\PersonalizationDesigns\Get\Query;

/**
 * preferences_list_param
 */
final class QueryPreferencesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public bool $is_default;
    public bool $is_platform_default;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'is_platform_default' => is_bool($value) ? $this->is_platform_default = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
