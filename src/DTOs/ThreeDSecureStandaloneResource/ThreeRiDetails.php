<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * ThreeRIDetailsResource
 *
 * Contains details for a 3RI standalone 3DS Authentication.
 */
final class ThreeRiDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'previous_authentication',
        'type',
    ];

    protected const array VALIDATION = [
        'previous_authentication' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID of the previous initial authenticated 3DS Authentication object.
     */
    public string $previous_authentication {
        set {
            $this->assigning('previous_authentication', $value);
            $this->previous_authentication = $value;
        }
    }
    /**
     * Type of the 3RI Authentication.
     */
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\ThreeRiDetails\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'previous_authentication' => is_string($value) ? $this->previous_authentication = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ThreeDSecureStandaloneResource\ThreeRiDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
