<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * GelatoSessionEmailOptions
 */
final class SessionEmailOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Request one time password verification of `provided_details.email`.
     */
    public bool $require_verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'require_verification' => is_bool($value) ? $this->require_verification = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
