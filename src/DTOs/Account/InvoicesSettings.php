<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountInvoicesSettings
 */
final class InvoicesSettings extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The list of default Account Tax IDs to automatically include on invoices. Account Tax IDs get added when an invoice is finalized.
     */
    public ?\StripeSDK\Collections\Account\InvoicesSettings\TaxIdsCollection $default_account_tax_ids;
    /**
     * Whether to save the payment method after a payment is completed for a one-time invoice or a subscription invoice when the customer already has a default payment method on the hosted invoice page.
     */
    public ?\StripeSDK\Enums\Account\InvoicesSettings\MethodSaveEnum $hosted_payment_method_save;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hosted_payment_method_save' => $value === null || is_string($value) ? $this->hosted_payment_method_save = $value === null ? null : \StripeSDK\Enums\Account\InvoicesSettings\MethodSaveEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
