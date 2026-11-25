<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationAuthenticationExemption
 */
final class AuthorizationAuthenticationExemption extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'claimed_by',
        'type',
    ];

    /**
     * The entity that requested the exemption, either the acquiring merchant or the Issuing user.
     */
    public \StripeSDK\Enums\Issuing\AuthorizationAuthenticationExemption\ClaimedByEnum $claimed_by;
    /**
     * The specific exemption claimed for this authorization.
     */
    public \StripeSDK\Enums\Issuing\AuthorizationAuthenticationExemption\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'claimed_by' => is_string($value) ? $this->claimed_by = \StripeSDK\Enums\Issuing\AuthorizationAuthenticationExemption\ClaimedByEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Issuing\AuthorizationAuthenticationExemption\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
