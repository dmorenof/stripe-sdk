<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingCreditGrantsResourceAmount
 */
final class CreditGrantsResourceAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The monetary amount.
     */
    public ?\StripeSDK\DTOs\Billing\CreditGrantsResourceMonetaryAmount $monetary;
    /**
     * The type of this amount. We currently only support `monetary` billing credits.
     */
    public \StripeSDK\Enums\Billing\CreditGrantsResourceAmount\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'monetary' => $value === null || $value instanceof \stdClass ? $this->monetary = $value === null ? null : new \StripeSDK\DTOs\Billing\CreditGrantsResourceMonetaryAmount($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Billing\CreditGrantsResourceAmount\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
