<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * Future Usage Detail
 *
 * Contains information about the future authorisations related to this authentication
 */
final class FutureUsage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\Installment $installment;
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\Recurring $recurring;
    /**
     * The type of future usage declared for this 3DS Authentication.
     */
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\FutureUsage\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'installment' => $value instanceof \stdClass ? $this->installment = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\Installment($value) : parent::assignMember($name, $value),
            'recurring' => $value instanceof \stdClass ? $this->recurring = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\Recurring($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ThreeDSecureStandaloneResource\FutureUsage\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
