<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Mandate;

/**
 * mandate_blik
 */
final class Blik extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Date at which the mandate expires.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * Type of the mandate.
     */
    public \StripeSDK\Enums\Mandate\Blik\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Mandate\Blik\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
