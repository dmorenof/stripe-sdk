<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_options_customer_balance_eu_bank_account
 */
final class MethodOptionsCustomerBalanceEuBankAccount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
    ];

    /**
     * The desired country code of the bank account information. Permitted values include: `DE`, `FR`, `IE`, or `NL`.
     */
    public \StripeSDK\Enums\Payment\MethodOptionsCustomerBalanceEuBankAccount\CountryEnum $country;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = \StripeSDK\Enums\Payment\MethodOptionsCustomerBalanceEuBankAccount\CountryEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
