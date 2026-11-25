<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData;

/**
 * authentication_exemption_specs
 */
final class AuthenticationExemptionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'claimed_by',
        'type',
    ];

    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\AuthenticationExemption\ClaimedByEnum $claimed_by;
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\AuthenticationExemption\ExemptionTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'claimed_by' => is_string($value) ? $this->claimed_by = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\AuthenticationExemption\ClaimedByEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\AuthenticationExemption\ExemptionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
