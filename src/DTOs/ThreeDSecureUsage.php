<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * three_d_secure_usage
 */
final class ThreeDSecureUsage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'supported',
    ];

    /**
     * Whether 3D Secure is supported on this card.
     */
    public bool $supported;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'supported' => is_bool($value) ? $this->supported = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
