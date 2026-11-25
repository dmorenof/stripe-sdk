<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_customer_balance_bank_transfer
 */
final class PaymentMethodOptionsCustomerBalanceBankTransfer extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Invoice\PaymentMethodOptionsCustomerBalanceBankTransferEuBankTransfer $eu_bank_transfer;
    /**
     * The bank transfer type that can be used for funding. Permitted values include: `eu_bank_transfer`, `gb_bank_transfer`, `jp_bank_transfer`, `mx_bank_transfer`, or `us_bank_transfer`.
     */
    public ?string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'eu_bank_transfer' => $value instanceof \stdClass ? $this->eu_bank_transfer = new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsCustomerBalanceBankTransferEuBankTransfer($value) : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
