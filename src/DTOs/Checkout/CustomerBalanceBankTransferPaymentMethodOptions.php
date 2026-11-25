<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutCustomerBalanceBankTransferPaymentMethodOptions
 */
final class CustomerBalanceBankTransferPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\MethodOptionsCustomerBalanceEuBankAccount $eu_bank_transfer;
    /**
     * List of address types that should be returned in the financial_addresses response. If not specified, all valid types will be returned.
     *
     * Permitted values include: `sort_code`, `zengin`, `iban`, or `spei`.
     */
    public \StripeSDK\Collections\Checkout\CustomerBalanceBankTransferPaymentMethodOptions\AddressTypesCollection $requested_address_types;
    /**
     * The bank transfer type that this PaymentIntent is allowed to use for funding Permitted values include: `eu_bank_transfer`, `gb_bank_transfer`, `jp_bank_transfer`, `mx_bank_transfer`, or `us_bank_transfer`.
     */
    public ?\StripeSDK\Enums\Checkout\CustomerBalanceBankTransferPaymentMethodOptions\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'eu_bank_transfer' => $value instanceof \stdClass ? $this->eu_bank_transfer = new \StripeSDK\DTOs\Payment\MethodOptionsCustomerBalanceEuBankAccount($value) : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\Checkout\CustomerBalanceBankTransferPaymentMethodOptions\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
