<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\Post\CashBalance;

/**
 * balance_settings_param
 */
final class BalanceSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Customers\Post\CashBalance\Settings\ReconciliationModeEnum $reconciliation_mode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reconciliation_mode' => is_string($value) ? $this->reconciliation_mode = \StripeSDK\Enums\V1\Customers\Post\CashBalance\Settings\ReconciliationModeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
