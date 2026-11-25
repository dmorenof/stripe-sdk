<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * CouponCurrencyOption
 */
final class CouponCurrencyOption extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_off',
    ];

    /**
     * Amount (in the `currency` specified) that will be taken off the subtotal of any invoices for this customer.
     */
    public int $amount_off;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_off' => is_int($value) ? $this->amount_off = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
