<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * GelatoSessionMatchingOptions
 */
final class SessionMatchingOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Strictness of the DOB matching policy to apply.
     */
    public \StripeSDK\Enums\Gelato\SessionMatchingOptions\DobEnum $dob;
    /**
     * Strictness of the name matching policy to apply.
     */
    public \StripeSDK\Enums\Gelato\SessionMatchingOptions\NameEnum $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dob' => is_string($value) ? $this->dob = \StripeSDK\Enums\Gelato\SessionMatchingOptions\DobEnum::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = \StripeSDK\Enums\Gelato\SessionMatchingOptions\NameEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
