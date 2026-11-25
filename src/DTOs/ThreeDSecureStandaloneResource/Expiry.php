<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * Expiry Detail
 *
 * Information about recurring payment expiry
 */
final class Expiry extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'date' => [
            'maxLength' => 5000,
        ],
    ];

    public string $date {
        set {
            $this->assigning('date', $value);
            $this->date = $value;
        }
    }
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\Expiry\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ThreeDSecureStandaloneResource\Expiry\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
