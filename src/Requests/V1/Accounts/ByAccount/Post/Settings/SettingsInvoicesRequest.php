<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings;

/**
 * invoices_settings_specs
 */
final class SettingsInvoicesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\Invoices\TaxIdsRequest $default_account_tax_ids;
    public \StripeSDK\Enums\V1\Accounts\ByAccount\Post\Settings\Invoices\MethodSaveEnum $hosted_payment_method_save;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hosted_payment_method_save' => is_string($value) ? $this->hosted_payment_method_save = \StripeSDK\Enums\V1\Accounts\ByAccount\Post\Settings\Invoices\MethodSaveEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
