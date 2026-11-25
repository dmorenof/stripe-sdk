<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConnectEmbedded;

/**
 * ConnectEmbeddedBaseConfigClaim
 */
final class BaseConfigClaim extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
        'features',
    ];

    /**
     * Whether the embedded component is enabled.
     */
    public bool $enabled;
    public \StripeSDK\DTOs\ConnectEmbedded\BaseFeatures $features;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
