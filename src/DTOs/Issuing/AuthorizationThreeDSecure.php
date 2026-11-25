<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationThreeDSecure
 */
final class AuthorizationThreeDSecure extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'result',
    ];

    /**
     * The outcome of the 3D Secure authentication request.
     */
    public \StripeSDK\Enums\Issuing\AuthorizationThreeDSecure\ResultEnum $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'result' => is_string($value) ? $this->result = \StripeSDK\Enums\Issuing\AuthorizationThreeDSecure\ResultEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
