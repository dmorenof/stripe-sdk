<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\CreditGrants\Post\Amount;

/**
 * monetary_amount_param
 */
final class AmountMonetaryRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'value',
    ];

    /**
     * Format: currency
     */
    public string $currency;
    public int $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'value' => is_int($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
