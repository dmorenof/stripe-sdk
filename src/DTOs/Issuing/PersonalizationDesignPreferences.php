<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingPersonalizationDesignPreferences
 */
final class PersonalizationDesignPreferences extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'is_default',
    ];

    /**
     * Whether we use this personalization design to create cards when one isn't specified. A connected account uses the Connect platform's default design if no personalization design is set as the default design.
     */
    public bool $is_default;
    /**
     * Whether this personalization design is used to create cards when one is not specified and a default for this connected account does not exist.
     */
    public ?bool $is_platform_default;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'is_platform_default' => $value === null || is_bool($value) ? $this->is_platform_default = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
