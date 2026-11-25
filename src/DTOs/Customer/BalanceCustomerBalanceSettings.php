<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceCustomerBalanceSettings
 */
final class BalanceCustomerBalanceSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'reconciliation_mode',
        'using_merchant_default',
    ];

    /**
     * The configuration for how funds that land in the customer cash balance are reconciled.
     */
    public \StripeSDK\Enums\Customer\BalanceCustomerBalanceSettings\ReconciliationModeEnum $reconciliation_mode;
    /**
     * A flag to indicate if reconciliation mode returned is the user's default or is specific to this customer cash balance
     */
    public bool $using_merchant_default;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reconciliation_mode' => is_string($value) ? $this->reconciliation_mode = \StripeSDK\Enums\Customer\BalanceCustomerBalanceSettings\ReconciliationModeEnum::from($value) : parent::assignMember($name, $value),
            'using_merchant_default' => is_bool($value) ? $this->using_merchant_default = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
