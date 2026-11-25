<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\CashBalance\Post;

/**
 * balance_settings_param
 *
 * A hash of settings for this cash balance.
 */
final class CashBalanceSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Customers\ByCustomer\CashBalance\Post\Settings\ReconciliationModeEnum $reconciliation_mode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reconciliation_mode' => is_string($value) ? $this->reconciliation_mode = \StripeSDK\Enums\V1\Customers\ByCustomer\CashBalance\Post\Settings\ReconciliationModeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
