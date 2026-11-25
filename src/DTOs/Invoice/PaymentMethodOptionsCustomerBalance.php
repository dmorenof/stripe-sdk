<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_customer_balance
 */
final class PaymentMethodOptionsCustomerBalance extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Invoice\PaymentMethodOptionsCustomerBalanceBankTransfer $bank_transfer;
    /**
     * The funding method type to be used when there are not enough funds in the customer balance. Permitted values include: `bank_transfer`.
     */
    public ?\StripeSDK\Enums\Invoice\PaymentMethodOptionsCustomerBalance\FundingTypeEnum $funding_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_transfer' => $value instanceof \stdClass ? $this->bank_transfer = new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsCustomerBalanceBankTransfer($value) : parent::assignMember($name, $value),
            'funding_type' => $value === null || is_string($value) ? $this->funding_type = $value === null ? null : \StripeSDK\Enums\Invoice\PaymentMethodOptionsCustomerBalance\FundingTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
