<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_us_bank_account_linked_account_options
 */
final class PaymentMethodOptionsUsBankAccountLinkedAccountOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Invoice\PaymentMethodOptionsUsBankAccountLinkedAccountOptionsFilters $filters;
    /**
     * The list of permissions to request. The `payment_method` permission must be included.
     */
    public \StripeSDK\Collections\Invoice\PaymentMethodOptionsUsBankAccountLinkedAccountOptions\PermissionsCollection $permissions;
    /**
     * Data features requested to be retrieved upon account creation.
     */
    public ?\StripeSDK\Collections\Invoice\PaymentMethodOptionsUsBankAccountLinkedAccountOptions\PrefetchCollection $prefetch;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'filters' => $value instanceof \stdClass ? $this->filters = new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsUsBankAccountLinkedAccountOptionsFilters($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
