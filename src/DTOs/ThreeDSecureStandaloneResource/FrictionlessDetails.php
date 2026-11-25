<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * FrictionlessDetailsResource
 */
final class FrictionlessDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Type of frictionless flow you requested for this 3DS Authentication.
     */
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\FrictionlessDetails\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ThreeDSecureStandaloneResource\FrictionlessDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
