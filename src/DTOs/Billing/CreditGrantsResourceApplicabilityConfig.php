<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingCreditGrantsResourceApplicabilityConfig
 */
final class CreditGrantsResourceApplicabilityConfig extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'scope',
    ];

    public \StripeSDK\DTOs\Billing\CreditGrantsResourceScope $scope;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'scope' => $value instanceof \stdClass ? $this->scope = new \StripeSDK\DTOs\Billing\CreditGrantsResourceScope($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
