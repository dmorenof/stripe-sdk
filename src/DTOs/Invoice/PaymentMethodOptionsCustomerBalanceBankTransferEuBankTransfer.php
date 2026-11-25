<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_customer_balance_bank_transfer_eu_bank_transfer
 */
final class PaymentMethodOptionsCustomerBalanceBankTransferEuBankTransfer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
    ];

    /**
     * The desired country code of the bank account information. Permitted values include: `DE`, `FR`, `IE`, or `NL`.
     */
    public \StripeSDK\Enums\Invoice\PaymentMethodOptionsCustomerBalanceBankTransferEuBankTransfer\CountryEnum $country;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = \StripeSDK\Enums\Invoice\PaymentMethodOptionsCustomerBalanceBankTransferEuBankTransfer\CountryEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
