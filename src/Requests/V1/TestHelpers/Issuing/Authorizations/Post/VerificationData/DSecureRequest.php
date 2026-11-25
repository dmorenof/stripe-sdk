<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData;

/**
 * three_d_secure_specs
 */
final class DSecureRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'result',
    ];

    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\ThreeDSecure\SecureResultEnum $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'result' => is_string($value) ? $this->result = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\ThreeDSecure\SecureResultEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
