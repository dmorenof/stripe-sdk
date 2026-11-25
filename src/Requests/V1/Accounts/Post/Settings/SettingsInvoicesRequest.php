<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Settings;

/**
 * invoices_settings_specs_create
 */
final class SettingsInvoicesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Accounts\Post\Settings\Invoices\MethodSaveEnum $hosted_payment_method_save;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hosted_payment_method_save' => is_string($value) ? $this->hosted_payment_method_save = \StripeSDK\Enums\V1\Accounts\Post\Settings\Invoices\MethodSaveEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
